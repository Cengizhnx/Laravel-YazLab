<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;
use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Storage;


use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Kreait\Firebase\Value\Uid;
use Kreait\Laravel\Firebase\Facades\Firebase;
use SebastianBergmann\Environment\Console;

class ContactController extends Controller
{
    protected $auth;

    public function __construct(Database $database, FirebaseAuth $auth)
    {
        $this->database = $database;
        $this->tablename = 'user';
        $this->auth = $auth;
    }

    public function index()
    {

        return view('firebase.contact.index');
        /*$reference = $this->database->getReference("basvurular/" . $b)->getChild('/' .  $a)->getChild('/')->getValue();

        foreach ($reference as $key => $item) {

            $contac = $this->database->getReference('basvurular/' . $b)->getChild('/' .  $a)->getValue();
            return view('firebase.contact.index', compact('contac'));
        }*/
    }

    public function profile(Request $request)
    {
        /*
        $reference = $this->database->getReference($this->tablename)->getValue();

        foreach ($reference as $key => $item) {
            if (201307087 == "$item[ogrencino]") {
                $a = 201307087;
                $b = "yazokulu";
                $contac = $this->database->getReference('basvurular/' . $b)->getChild('/' .  $a)->getValue();
                return view('firebase.contact.profile', compact('contac'));
            }

        }*/

        return view('firebase.contact.profile');
    }

    public function kayit()
    {
        return view('firebase.contact.kayit');
    }

    public function dgs()
    {
        return view('firebase.contact.dgs');
    }

    public function yatay()
    {
        return view('firebase.contact.yatay');
    }

    public function yazokulu()
    {
        return view('firebase.contact.yazokulu');
    }

    public function cap()
    {
        return view('firebase.contact.cap');
    }

    public function intibak()
    {
        return view('firebase.contact.intibak');
    }
    public function adminpanel()
    {
        return view('firebase.contact.adminpanel');
    }
    public function customer()
    {
        return view('firebase.contact.customer');
    }

    public function sign(Request $request)
    {

        try {
            if ($request['email'] == "kouadmin@gmail.com" && $request['sif1'] == "kouadmin") {
                
                return redirect('/adminpanel');
            } else {
                $signInResult = $this->auth->signInWithEmailAndPassword($request['email'], $request['sif1']);

                //uid Session
                $loginuid = $signInResult->firebaseUserId();
                Session::put('uid', $loginuid);

                $reference = $this->database->getReference($this->tablename)->getValue();
                foreach ($reference as $key => $item) {
                    if ($item['email'] == $request->email && $item['password'] == $request->sif1) {

                        $adsoyad = "$item[name]";
                        $og_no = "$item[ogrno]";
                        $blm = "$item[blm]";
                        $snf = "$item[sinif]";
                        $email = "$item[email]";
                        $tlfn = "$item[phone]";
                        $id = $loginuid;
                        Cookie::queue('adsoyad', $adsoyad, 120);
                        Cookie::queue('og_no', $og_no, 120);
                        Cookie::queue('blm', $blm, 120);
                        Cookie::queue('snf', $snf, 120);
                        Cookie::queue('email', $email, 120);
                        Cookie::queue('tlfn', $tlfn, 120);
                        Cookie::queue('id', $id, 120);

                        return redirect('/profil');

                        /* return redirect('/contacts')->with('status',"$item[adsoyad]")->with('no',"$item[ogrencino]" )->with('blm',"$item[fakulte_bolum]" )->with('snf',"$item[sinif]" )
                ->with('mail',"$item[email]" )->with('tlf',"$item[telefonno]" );*/
                    }
                }
            }
        } catch (FirebaseException $e) {
            if ($item['email'] =! $request->email && $item['password'] =! $request->sif1) {
                Session::flash('message', '❌ Hatalı e-mail veya parola !');
                return redirect('/');
            } else {
                Session::flash('message', '❌ Hatalı e-mail veya şifre !');

                return redirect('/');
            }
        }


        /*
    $reference = $this->database->getReference($this->tablename)->getValue();
    foreach ($reference as $key => $item){
       if ($item['email'] == $request->email && $item['sifre1'] == $request->sif1 ) {
        return redirect('/contacts')->with('status','Giriş Başarılı.');
       } 
    } 
    if ($item['email'] =! $request->email && $item['sifre1'] =! $request->sif1) {
        Session::flash('message', 'Hatalı e-mail veya şifre !');
        return redirect('/');
    }    
    else {
            Session::flash('message', 'Hatalı e-mail veya şifre !');
            return redirect('/');
         }*/
    }

    public function password()
    {
        return view('firebase.contact.password');
    }

    public function sifre(Request $request)
    {

        $request->validate([
            'email' => 'required',
        ]);
        try {
            $email = $request->email;
            $link = app('firebase.auth')->sendPasswordResetLink($email);
            Session::flash('message', '✔️ Yenileme maili gönderildi. Lütfen gelen kutunuzu kontrol edin.');
            return back()->withInput();
        } catch (FirebaseException $e) {
            $error = str_replace('_', ' ', $e->getMessage());
            Session::flash('message', '❌ Hata Mail Gönderilemedi.');
            return back()->withInput();
        }
    }

    public function store(Request $request)
    {
        if ($request->sif1 == $request->sif2) {
            try {
                $userProperties = [
                    'email' => $request->email,
                    'emailVerified' => false,
                    'password' => $request->sif1,
                    'displayName' => $request->adsoy,
                    'disabled' => false,
                ];
                $createdUser = $this->auth->createUser($userProperties);
            } catch (FirebaseException $e) {
                Session::flash('error', $e->getMessage());
            }
            $postData = [
                'tc' => $request->tc,
                'name' => $request->adsoy,
                'dogum' => $request->dt,
                'phone' => $request->tlfn,
                'email' => $request->email,
                'password' => $request->sif1,
                'password' => $request->sif2,
                'ogrno' => $request->ogrno,
                'uni' => $request->uni,
                'blm' => $request->fakulteblm,
                'sinif' => $request->sinif,
            ];
            $postRef = $this->database->getReference($this->tablename)->push($postData);
            if ($postRef) {
                return redirect('/')->with('status', '✔️ Öğrenci Başarıyla Kaydedildi.');
            } else {
                return redirect('/contacts')->with('status', '❌ Hata Öğrenci Kaydedilemedi. ');
            }
        } else {
            Session::flash('message', '❌ Hata şifreler eşit değil !');
            return redirect('add-contact');
        }
    }

    public function basvur(Request $request)
    {
        $status = "Beklemede";
        $this->tablename1 = 'basvurular/dersintibak';

        $reference = $this->database->getReference($this->tablename)->getChild('/')->getChild('/')->getValue();
        foreach ($reference as $key => $item) {
            if ($request->ogr == "$item[ogrno]") { // == "$item[ogrno]"
                $postData = [
                    'id' => $request->id,
                    'basvuru_turu' => $request->basvuru_turu,
                    'durum' => $status,
                    'adsoyad' => "$item[name]",
                    'email' => "$item[email]",
                    'ogrencino' => $request->ogr,
                    'fakulte_bolum' => "$item[blm]",
                    'sinif' => "$item[sinif]",
                ];
                $postRef = $this->database->getReference($this->tablename1)->getChild($request->ogr)->push($postData);
                if ($postRef) {
                    return redirect('/profil')->with('status', '✔️ Öğrenci Başarıyla Kaydedildi.');
                } else {
                    return redirect(' ')->with('status', '❌ Hata Öğrenci Kaydedilemedi. ');
                }
            }
            else{
                return redirect(' ')->with('status', '❌ Hata Öğrenci Kaydedilemedi. ');
            }
        }
    }

    public function yg_basvur(Request $request)
    {
        $status = "Beklemede";
        $this->tablename1 = 'basvurular/yataygecis';

        $reference = $this->database->getReference($this->tablename)->getChild('/')->getChild('/')->getValue();
        foreach ($reference as $key => $item) {
            if ($request->ogr == "$item[ogrno]") {
                $postData = [
                    'id' => $request->id,
                    'basvuru_turu' => $request->basvuru_turu,
                    'durum' => $status,
                    'adsoyad' => "$item[name]",
                    'email' => "$item[email]",
                    'ogrencino' => $request->ogr,
                    'fakulte_bolum' => "$item[blm]",
                    'sinif' => "$item[sinif]",
                ];
                $postRef = $this->database->getReference($this->tablename1)->getChild($request->ogr)->push($postData);
                if ($postRef) {
                    return redirect('/profil')->with('status', '✔️ Öğrenci Başarıyla Kaydedildi.');
                } else {
                    return redirect(' ')->with('status', '❌ Hata Öğrenci Kaydedilemedi. ');
                }
            }
        }
    }
}
