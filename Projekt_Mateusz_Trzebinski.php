<!DOCTYPE html>
<html lang="pl-PL">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
*{
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
}

body{
  font-family: Helvetica;
  -webkit-font-smoothing: antialiased;
  background: rgba( 71, 147, 227, 1);
}

h2{
  text-align: center;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: white;
  padding: 30px 0;
}

h3{
  text-align: center;
  font-size: 18px;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 30px 0;
}

.wybor{
  border-radius: 5px;
  font-size: 12px;
  font-weight: normal;
  border: none;
  border-collapse: collapse;
  width: 20%;
  white-space: nowrap;
  background-color: white;
  text-align: center;
  padding: 8px;
  position: absolute;
  left: 40%;
}

.container {
  border-radius: 5px;
  font-size: 12px;
  font-weight: normal;
  border: none;
  border-collapse: collapse;
  width: 40%;
  white-space: nowrap;
  background-color: white;
  text-align: center;
  padding: 8px;
  position: absolute;
  top: 40%;
  left: 30%;
}

.table-wrapper{
  margin: 10px 70px 70px;
  box-shadow: 0px 35px 50px rgba( 0, 0, 0, 0.2 );
}

table{
  border-radius: 5px;
  font-size: 12px;
  font-weight: normal;
  border: none;
  border-collapse: collapse;
  width: 100%;
  max-width: 100%;
  white-space: nowrap;
  background-color: white;
}

td, th{
  text-align: center;
  padding: 8px;
}

td{
  border-right: 1px solid #f8f8f8;
  font-size: 12px;
}

thead th{
  color: #ffffff;
  background: #4FC3A1;
}

thead th:nth-child(odd){
  color: #ffffff;
  background: #324960;
}

tr:nth-child(even){
  background: #F8F8F8;
}

input{
  width:250px;
}
::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;
}

:-ms-input-placeholder {
   text-align: center;
}


</style>
    <title>Mateusz Trzebiński Projekt</title>
  </head>
  <body>

    <div class="wybor">
      <form method="POST">
        <select class="form-control" name="Table">
          <option value="pracownicy">Pracownicy</option>
          <option value="kierownicy">Kierownicy</option>
          <option value="produkty">Produkty</option>
          <option value="magazyny">Magazyny</option>
          <option value="zlecenia">Zlecenia</option>
        </select>
        <br><br><input name="BtnChoice" class="btn btn-secondary btn-lg" type="submit" value="CHOICE"><br><br>
      </form>
    </div>

    <?php
      $host = "sql.ania-pol.nazwa.pl";
      $user = "ania-pol_mateuszt";
      $pwd = "Diabelek123";
      $db = "ania-pol_mateuszt";
      $conn = mysqli_connect($host, $user, $pwd, $db);
      mysqli_set_charset($conn,"utf8");

      if(!$conn)
      {
	       die("Error".mysqli_connect_error());
      }

      if(isset($_POST['BtnChoice']))
      {
        $spacje = '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
        echo '<div class="container">';
        echo '<form method="POST">';
        switch ($_POST['Table']) {
          case 'pracownicy':

            echo '<input type="hidden" name="pracownicy"/>';
            echo '<h3>PRACOWNICY</h3>';
            echo '<input name="godnosc" type="text" placeholder="Godność">'.$spacje.$spacje;
            echo '<input name="godnosc_do_zmiany" type="text" placeholder="Godność do zmiany"><br/><br/>';

            echo '<input name="pesel" type="text" placeholder="Pesel">'.$spacje.$spacje;
            echo '<input name="pesel_do_zmiany" type="text" placeholder="Pesel do zmiany"><br/><br/>';

            echo '<input name="adres" type="text" placeholder="Adres">'.$spacje.$spacje;
            echo '<input name="adres_do_zmiany" type="text" placeholder="Adres do zmiany"><br/><br/>';

            echo '<input name="data_urodzenia" type="text" placeholder="Data urodzenia">'.$spacje.$spacje;
            echo '<input name="data_do_zmiany" type="text" placeholder="Data urodzenia do zmiany"><br/><br/>';

            echo '<input name="kierownik" type="text" placeholder="Kierownik">'.$spacje.$spacje;
            echo '<input name="kierownik_do_zmiany" type="text" placeholder="Kierownik do zmiany"><br/><br/>';
          break;

          case 'kierownicy':

            echo '<input type="hidden" name="kierownicy"/>';
            echo '<h3>KIEROWNICY</h3>';
            echo '<input name="godnosc" type="text" placeholder="Godność">'.$spacje.$spacje;
            echo '<input name="godnosc_do_zmiany" type="text" placeholder="Godność do zmiany"><br/><br/>';

            echo '<input name="dzial" type="text" placeholder="Dział">'.$spacje.$spacje;
            echo '<input name="dzial_do_zmiany" type="text" placeholder="Dział do zmiany"><br/><br/>';
          break;

          case 'produkty':

            echo '<input type="hidden" name="produkty"/>';
            echo '<h3>PRODUKTY</h3>';
            echo '<input name="nazwa" type="text" placeholder="Nazwa">'.$spacje.$spacje;
            echo '<input name="nazwa_do_zmiany" type="text" placeholder="Nazwa do zmiany"><br/><br/>';
          break;

          case 'magazyny':

            echo '<input type="hidden" name="magazyny"/>';
            echo '<h3>MAGAZYNY</h3>';
            echo '<input name="adres" type="text" placeholder="Adres">'.$spacje.$spacje;
            echo '<input name="adres_do_zmiany" type="text" placeholder="Adres do zmiany"><br/><br/>';
          break;

          case 'zlecenia':

            echo '<input type="hidden" name="zlecenia"/>';
            echo '<h3>ZLECENIA</h3>';
            echo '<input name="godnosc" type="text" placeholder="Godność">'.$spacje.$spacje;
            echo '<input name="godnosc_do_zmiany" type="text" placeholder="Godność do zmiany"><br/><br/>';

            echo '<input name="nazwa" type="text" placeholder="Nazwa">'.$spacje.$spacje;
            echo '<input name="nazwa_do_zmiany" type="text" placeholder="Nazwa do zmiany"><br/><br/>';

            echo '<input name="adres_magazny" type="text" placeholder="Adres magazynu">'.$spacje.$spacje;
            echo '<input name="adres_magazynu_do_zmiany" type="text" placeholder="Adres magazynu do zmiany"><br/><br/>';

            echo '<input name="data_dostawy" type="text" placeholder="Data dostawy">'.$spacje.$spacje;
            echo '<input name="data_dostawy_do_zmiany" type="text" placeholder="Data dostawy do zmiany"><br/><br/>';
          break;

          default:
            echo "Brak takiej tabeli";
          break;
        }

        echo '<input name="BtnSelect" type="submit" class="btn btn-primary btn-lg" value="SELECT">'.$spacje;
        echo '<input name="BtnInsert" type="submit" class="btn btn-secondary btn-lg" value="INSERT"><br/><br/>';
        echo '<input name="BtnUpdate" type="submit" class="btn btn-primary btn-lg" value="UPDATE">'.$spacje;
        echo '<input name="BtnDelete" type="submit" class="btn btn-secondary btn-lg" value="DELETE">';
        echo '</form>';
        echo '</div>';
      }

      // Przycisk wyswietlania
      if(isset($_POST['BtnSelect']))
      {

        echo "<br><br><br><br><br><br><br><br><h2>DANE Z TABELI</h2>";
        echo "<hr>";
        echo '<div class="table-wrapper">';

        if(isset($_POST['pracownicy'])) {
          $where = " where ";
          $g = $_POST['godnosc'];
          $p = $_POST['pesel'];
          $a = $_POST['adres'];
          $d = $_POST['data_urodzenia'];
          $k = $_POST['kierownik'];

          if(!empty($g)) {
            $where .= "p.godnosc = '".$g."' and ";
          }

          if(!empty($p)) {
            $where .= "p.pesel = '".$p."' and ";
          }

          if(!empty($a)) {
            $where .= "p.adres = '".$a."' and ";
          }

          if(!empty($d)) {
            $where .= "p.data_urodzenia = '".$d."' and ";
          }

          if(!empty($k)) {
            $where .= "k.godnosc = '".$k."' and ";
          }

          $s = "select p.id, p.godnosc, p.pesel, p.adres, p.data_urodzenia, k.godnosc as kierownik from pracownicy as p left join kierownicy as k on p.id_kierownika = k.id";
          if ($where != " where ") {
            $s .= rtrim($where," and ");
          }
          $res = mysqli_query($conn,$s);

          echo '<table>
          <thead>
          <tr>
            <th> <font face="Arial">GODNOŚĆ</font> </th>
            <th> <font face="Arial">PESEL</font> </th>
            <th> <font face="Arial">ADRES</font> </th>
            <th> <font face="Arial">DATA URODZENIA</font> </th>
            <th> <font face="Arial">KIEROWNIK</font> </th>
          </tr>
          </thead>';

          while($row=mysqli_fetch_assoc($res))
 	        {
		          $gi = $row['godnosc'];
              $pi = $row['pesel'];
              $ai = $row['adres'];
              $di = $row['data_urodzenia'];
              $ki = $row['kierownik'];

              echo '<tr>
                  <td>'.$gi.'</td>
                  <td>'.$pi.'</td>
                  <td>'.$ai.'</td>
                  <td>'.$di.'</td>
                  <td>'.$ki.'</td>
                  </tr>';
 	       }
     }

     if(isset($_POST['kierownicy'])) {
       $where = " where ";
       $g = $_POST['godnosc'];
       $d = $_POST['dzial'];

       if(!empty($g)) {
         $where .= "godnosc = '".$g."' and ";
       }

       if(!empty($d)) {
         $where .= "dzial = '".$d."' and ";
       }

       $s = "select godnosc, dzial from kierownicy";
       if ($where != " where ") {
         $s .= rtrim($where," and ");
       }
       $res = mysqli_query($conn,$s);

       echo '<table>
       <tr><thead>
         <th> <font face="Arial">GODNOŚĆ</font> </th>
         <th> <font face="Arial">DZIAŁ</font> </th>
         </thead>
       </tr>';

       while($row=mysqli_fetch_assoc($res))
       {
           $gi = $row['godnosc'];
           $di = $row['dzial'];

           echo '<tr>
               <td>'.$gi.'</td>
               <td>'.$di.'</td>
               </tr>';
      }
     }

     if(isset($_POST['produkty'])) {
       $where = " where ";
       $n = $_POST['nazwa'];

       if(!empty($n)) {
         $where .= "nazwa = '".$n."'";
       }

       $s = "select nazwa from produkty";
       if ($where != " where ") {
         $s .= $where;
       }
       $res = mysqli_query($conn,$s);

       echo '<table>
       <tr><thead>
         <th> <font face="Arial">NAZWA</font> </th>
         </thead>
       </tr>';

       while($row=mysqli_fetch_assoc($res))
       {
           $ni = $row['nazwa'];

           echo '<tr>
               <td>'.$ni.'</td>
               </tr>';
      }
     }

     if(isset($_POST['magazyny'])) {
       $where = " where ";
       $a = $_POST['adres'];

       if(!empty($a)) {
         $where .= "adres = '".$a."'";
       }

       $s = "select adres from magazyn";
       if ($where != " where ") {
         $s .= $where;
       }
       $res = mysqli_query($conn,$s);

       echo '<table>
       <tr><thead>
         <th> <font face="Arial">ADRES</font> </th>
         </thead>
       </tr>';

       while($row=mysqli_fetch_assoc($res))
       {
           $ai = $row['adres'];

           echo '<tr>
               <td>'.$ai.'</td>
               </tr>';
      }
     }

     if(isset($_POST['zlecenia'])) {
       $where = " where ";
       $g = $_POST['godnosc'];
       $n = $_POST['nazwa'];
       $am = $_POST['adres_magazny'];
       $dd = $_POST['data_dostawy'];


       if(!empty($g)) {
         $where .= "p.godnosc = '".$g."' and ";
       }

       if(!empty($n)) {
         $where .= "n.nazwa = '".$n."' and ";
       }

       if(!empty($am)) {
         $where .= "m.adres = '".$am."' and ";
       }

       if(!empty($dd)) {
         $where .= "z.data_dostawy = '".$dd."' and ";
       }


       $s = "select p.godnosc, n.nazwa, m.adres, z.data_dostawy from zlecenia as z inner join pracownicy as p on z.id_pracownika = p.id inner join produkty as n on z.id_produktu = n.id inner join magazyn as m on z.id_magazynu = m.id";
       if ($where != " where ") {
         $s .= rtrim($where," and ");
       }
       $res = mysqli_query($conn,$s);



       echo '<table>
       <tr>
       <thead>
         <th> <font face="Arial">GODNOŚĆ</font> </th>
         <th> <font face="Arial">NAZWA</font> </th>
         <th> <font face="Arial">ADRES</font> </th>
         <th> <font face="Arial">DATA DOSTAWY</font> </th>
         </thead>
       </tr>';

       while($row=mysqli_fetch_assoc($res))
       {
           $gi = $row['godnosc'];
           $pi = $row['nazwa'];
           $ai = $row['adres'];
           $di = $row['data_dostawy'];

           echo '<tr>
               <td>'.$gi.'</td>
               <td>'.$pi.'</td>
               <td>'.$ai.'</td>
               <td>'.$di.'</td>
               </tr>';
      }
     }
     echo "</div>";
  }

  // Przycisk wstawiania
  if(isset($_POST['BtnInsert']))
  {

     if(isset($_POST['pracownicy'])) {
       $g = $_POST['godnosc'];
       $p = $_POST['pesel'];
       $a = $_POST['adres'];
       $d = $_POST['data_urodzenia'];
       $k = $_POST['kierownik'];

       if(!empty($g) && !empty($p) && !empty($a) && !empty($d) && !empty($k)) {
         $id_kierownika = "select id from kierownicy where godnosc ='".$k."'";
         $res = mysqli_query($conn,$id_kierownika);
         if(mysqli_num_rows($res) == 0)
         {
           echo '<script>alert("Nie ma takiego kierownika!!!")</script>';
         }
         else
         {
           while($row=mysqli_fetch_assoc($res))
           {
              $id = $row['id'];
           }
            $insert = "insert into pracownicy(godnosc, pesel, adres, data_urodzenia, id_kierownika) values('".$g."','".$p."','".$a."','".$d."',".$id.")";
            mysqli_query($conn, $insert);
         }

       }
       else {
         echo '<script>alert("Wszystkie wartości muszą być uzupełnione!")</script>';
       }
     }

     if(isset($_POST['kierownicy'])) {
       $g = $_POST['godnosc'];
       $d = $_POST['dzial'];

       if(!empty($g) && !empty($d)) {
          $insert = "insert into kierownicy(godnosc, dzial) values('".$g."','".$d."')";
          mysqli_query($conn, $insert);
       }
       else {
         echo '<script>alert("Wszystkie wartości muszą być uzupełnione!")</script>';
       }
     }

     if(isset($_POST['produkty'])) {
       $n = $_POST['nazwa'];

       if(!empty($n)) {
          $insert = "insert into produkty(nazwa) values('".$n."')";
          mysqli_query($conn, $insert);
       }
       else {
         echo '<script>alert("Wszystkie wartości muszą być uzupełnione!")</script>';
       }
     }

     if(isset($_POST['magazyny'])) {
       $a = $_POST['adres'];

       if(!empty($a)) {
          $insert = "insert into magazyn(adres) values('".$a."')";
          mysqli_query($conn, $insert);
       }
       else {
         echo '<script>alert("Wszystkie wartości muszą być uzupełnione!")</script>';
       }
     }

     if(isset($_POST['zlecenia'])) {
       $g = $_POST['godnosc'];
       $n = $_POST['nazwa'];
       $am = $_POST['adres_magazny'];
       $dd = $_POST['data_dostawy'];

       if(!empty($g) && !empty($n) && !empty($am) && !empty($dd)) {
         $id_pracownika= "select id from pracownicy where godnosc ='".$g."'";
         $id_produktu= "select id from produkty where nazwa ='".$n."'";
         $id_magazynu= "select id from magazyn where adres ='".$am."'";

         $res = mysqli_query($conn,$id_pracownika);
         if(mysqli_num_rows($res) == 0)
         {
           echo '<script>alert("Nie ma takiego pracownika!!!")</script>';
         }
         else
         {
           while($row=mysqli_fetch_assoc($res))
           {
              $idp = $row['id'];
           }

         }

         $res = mysqli_query($conn,$id_produktu);
         if(mysqli_num_rows($res) == 0)
         {
           echo '<script>alert("Nie ma takiego produktu!!!")</script>';
         }
         else
         {
           while($row=mysqli_fetch_assoc($res))
           {
              $idn = $row['id'];
           }

         }

         $res = mysqli_query($conn,$id_magazynu);
         if(mysqli_num_rows($res) == 0)
         {
           echo '<script>alert("Nie ma takiego adresu magazynu!!!")</script>';
         }
         else
         {
           while($row=mysqli_fetch_assoc($res))
           {
              $idm = $row['id'];
           }

         }
         if(isset($idp) && isset($idn) && isset($idm))
         {
           $insert = "insert into zlecenia(id_pracownika, id_produktu, id_magazynu, data_dostawy) values('".$idp."','".$idn."','".$idm."',".$dd.")";
           mysqli_query($conn, $insert);
         }
       }
       else {
         echo '<script>alert("Wszystkie wartości muszą być uzupełnione!")</script>';
       }
     }
  }

  // Przycisk kasowania
  if(isset($_POST['BtnDelete']))
  {
    if(isset($_POST['pracownicy'])) {
      $where = " where ";
      $g = $_POST['godnosc'];
      $p = $_POST['pesel'];
      $a = $_POST['adres'];
      $d = $_POST['data_urodzenia'];
      $k = $_POST['kierownik'];

      if(empty($g) && empty($p) && empty($a) && empty($d) && empty($k)) {
        echo '<script>alert("Usuniesz całą bazę!!!")</script>';
      }
      else {
        if(!empty($g)) {
          $where .= "godnosc = '".$g."' and ";
        }

        if(!empty($p)) {
         $where .= "pesel = '".$p."' and ";
        }

        if(!empty($a)) {
          $where .= "adres = '".$a."' and ";
        }

        if(!empty($d)) {
          $where .= "data_urodzenia = '".$d."' and ";
        }

        if(!empty($k)) {
          $id_kierownika = "select id from kierownicy where godnosc ='".$k."'";
          $res = mysqli_query($conn,$id_kierownika);
          if(mysqli_num_rows($res) == 0)
          {
            echo '<script>alert("Nie ma takiego kierownika!!!")</script>';
          }
          else
          {
            while($row=mysqli_fetch_assoc($res))
            {
               $id = $row['id'];
            }
            $where .= "id_kierownika = '".$id."' and ";
          }
        }
        $s = "delete from pracownicy".rtrim($where," and ");
        mysqli_query($conn, $s);
      }
    }

    if(isset($_POST['kierownicy'])) {
      $where = " where ";
      $g = $_POST['godnosc'];
      $d = $_POST['dzial'];

      if(empty($g) && empty($d)) {
        echo '<script>alert("Usuniesz całą bazę!!!")</script>';
      }
      else {
        if(!empty($g)) {
          $where .= "godnosc = '".$g."' and ";
        }

        if(!empty($d)) {
          $where .= "dzial = '".$d."' and ";
        }

        $s = "delete from kierownicy".rtrim($where," and ");
        mysqli_query($conn, $s);
      }
    }

    if(isset($_POST['produkty'])) {
      $where = " where ";
      $n = $_POST['nazwa'];

      if(empty($n)) {
        echo '<script>alert("Usuniesz całą bazę!!!")</script>';
      }
      else {

        $where .= "nazwa = '".$n."'";
        $s = "delete from produkty".$where;
        mysqli_query($conn, $s);
      }
    }

    if(isset($_POST['magazyny'])) {
      $where = " where ";
      $a = $_POST['adres'];

      if(empty($a)) {
        echo '<script>alert("Usuniesz całą bazę!!!")</script>';
      }
      else {

        $where .= "adres = '".$a."'";
        $s = "delete from magazyn".$where;
        mysqli_query($conn, $s);
      }
    }

    if(isset($_POST['zlecenia'])) {
      $where = " where ";
      $g = $_POST['godnosc'];
      $n = $_POST['nazwa'];
      $am = $_POST['adres_magazny'];
      $dd = $_POST['data_dostawy'];

      if(empty($g) && empty($n) && empty($am) && empty($dd)) {
        echo '<script>alert("Usuniesz całą bazę!!!")</script>';
      }
      else {
        if(!empty($g)) {
          $pracownik = "select id from pracownicy where godnosc ='".$g."'";
          $res = mysqli_query($conn,$pracownik);
          if(mysqli_num_rows($res) == 0)
          {
            echo '<script>alert("Nie ma takiego pracownika!!!")</script>';
          }
          else
          {
            while($row=mysqli_fetch_assoc($res))
            {
               $idp = $row['id'];
            }
            $where .= "id_pracownika = '".$idp."' and ";
          }
        }

        if(!empty($n)) {
          $produkt = "select id from produkty where nazwa ='".$n."'";
          $res = mysqli_query($conn,$produkt);
          if(mysqli_num_rows($res) == 0)
          {
            echo '<script>alert("Nie ma takiego produktu!!!")</script>';
          }
          else
          {
            while($row=mysqli_fetch_assoc($res))
            {
               $idn = $row['id'];
            }
            $where .= "id_produktu = '".$idn."' and ";
          }
        }

        if(!empty($am)) {
          $magazyn = "select id from magazyn where adres ='".$am."'";
          $res = mysqli_query($conn,$magazyn);
          if(mysqli_num_rows($res) == 0)
          {
            echo '<script>alert("Nie ma takiego adresu magazynu!!!")</script>';
          }
          else
          {
            while($row=mysqli_fetch_assoc($res))
            {
               $idm = $row['id'];
            }
            $where .= "id_magazynu = '".$idm."' and ";
          }
        }

        if(!empty($dd)) {
          $where .= "data_dostawy = '".$dd."' and ";
        }

        $s = "delete from zlecenia".rtrim($where," and ");
        mysqli_query($conn, $s);
      }
    }
  }

  // Przycisk aktualizacji
  if(isset($_POST['BtnUpdate']))
  {
    if(isset($_POST['pracownicy'])) {
      $where = " where ";
      $set = " set ";

      $g = $_POST['godnosc'];
      $p = $_POST['pesel'];
      $a = $_POST['adres'];
      $d = $_POST['data_urodzenia'];
      $k = $_POST['kierownik'];

      $gz = $_POST['godnosc_do_zmiany'];
      $pz = $_POST['pesel_do_zmiany'];
      $az = $_POST['adres_do_zmiany'];
      $dz = $_POST['data_do_zmiany'];
      $kz = $_POST['kierownik_do_zmiany'];

      if(!empty($g)) {
        $where .= "godnosc = '".$g."' and ";
      }

      if(!empty($p)) {
       $where .= "pesel = '".$p."' and ";
      }

      if(!empty($a)) {
        $where .= "adres = '".$a."' and ";
      }

      if(!empty($d)) {
        $where .= "data_urodzenia = '".$d."' and ";
      }

      if(!empty($k)) {
        $id_kierownika = "select id from kierownicy where godnosc ='".$k."'";
        $res = mysqli_query($conn,$id_kierownika);
        if(mysqli_num_rows($res) == 0)
        {
          echo '<script>alert("Nie ma takiego kierownika!!!")</script>';
        }
        else
        {
          while($row=mysqli_fetch_assoc($res))
          {
             $id = $row['id'];
          }
          $where .= "id_kierownika = '".$id."' and ";
        }
      }

      // Pozycje ze zmiana
      if(!empty($gz)) {
        $set .= "godnosc = '".$gz."', ";
      }

      if(!empty($pz)) {
       $set .= "pesel = '".$pz."', ";
      }

      if(!empty($az)) {
        $set .= "adres = '".$az."', ";
      }

      if(!empty($dz)) {
        $set .= "data_urodzenia = '".$dz."', ";
      }

      if(!empty($kz)) {
        $id_kierownika_zmiana = "select id from kierownicy where godnosc ='".$kz."'";
        $res = mysqli_query($conn,$id_kierownika_zmiana);
        if(mysqli_num_rows($res) == 0)
        {
          echo '<script>alert("Nie ma takiego kierownika!!!")</script>';
        }
        else
        {
          while($row=mysqli_fetch_assoc($res))
          {
            $idz = $row['id'];
          }
          $set .= "id_kierownika = '".$idz."', ";
        }
      }
      $update = "update pracownicy".rtrim($set, ", ").rtrim($where, " and ");
      mysqli_query($conn, $update);
  }

  if(isset($_POST['kierownicy'])) {
    $where = " where ";
    $set = " set ";

    $g = $_POST['godnosc'];
    $d = $_POST['dzial'];

    $gz = $_POST['godnosc_do_zmiany'];
    $dz = $_POST['dzial_do_zmiany'];

    if(!empty($g)) {
      $where .= "godnosc = '".$g."' and ";
    }

    if(!empty($d)) {
      $where .= "dzial = '".$d."' and ";
    }

    // Pozycje ze zmiana
    if(!empty($gz)) {
      $set .= "godnosc = '".$gz."', ";
    }

    if(!empty($dz)) {
      $set .= "dzial = '".$dz."', ";
    }

    $update = "update kierownicy".rtrim($set, ", ").rtrim($where, " and ");
    mysqli_query($conn, $update);
}

if(isset($_POST['produkty'])) {
  $where = " where ";
  $set = " set ";

  $n = $_POST['nazwa'];
  $nz = $_POST['nazwa_do_zmiany'];

  if(!empty($n)) {
    $where .= "nazwa = '".$n."'";
  }

  // Pozycje ze zmiana
  if(!empty($nz)) {
    $set .= "nazwa = '".$nz."'";
  }

  $update = "update produkty".$set.$where;
  mysqli_query($conn, $update);
}

if(isset($_POST['magazyny'])) {
  $where = " where ";
  $set = " set ";

  $a = $_POST['adres'];
  $az = $_POST['adres_do_zmiany'];

  if(!empty($a)) {
    $where .= "adres = '".$a."'";
  }

  // Pozycje ze zmiana
  if(!empty($az)) {
    $set .= "adres = '".$az."'";
  }

  $update = "update magazyn".$set.$where;
  mysqli_query($conn, $update);
}

if(isset($_POST['zlecenia'])) {
  $where = " where ";
  $set = " set ";

  $g = $_POST['godnosc'];
  $n = $_POST['nazwa'];
  $am = $_POST['adres_magazny'];
  $dd = $_POST['data_dostawy'];

  $gz = $_POST['godnosc_do_zmiany'];
  $nz = $_POST['nazwa_do_zmiany'];
  $amz = $_POST['adres_magazynu_do_zmiany'];
  $ddz = $_POST['data_dostawy_do_zmiany'];

  if(!empty($g)) {
    $pracownik = "select id from pracownicy where godnosc ='".$g."'";
    $res = mysqli_query($conn,$pracownik);
    if(mysqli_num_rows($res) == 0)
    {
      echo '<script>alert("Nie ma takiego pracownika!!!")</script>';
    }
    else
    {
      while($row=mysqli_fetch_assoc($res))
      {
         $idp = $row['id'];
      }
      $where .= "id_pracownika = '".$idp."' and ";
    }
  }

  if(!empty($n)) {
    $produkt = "select id from produkty where nazwa ='".$n."'";
    $res = mysqli_query($conn,$produkt);
    if(mysqli_num_rows($res) == 0)
    {
      echo '<script>alert("Nie ma takiego produktu!!!")</script>';
    }
    else
    {
      while($row=mysqli_fetch_assoc($res))
      {
         $idn = $row['id'];
      }
      $where .= "id_produktu = '".$idn."' and ";
    }
  }

  if(!empty($am)) {
    $magazyn = "select id from magazyn where adres ='".$am."'";
    $res = mysqli_query($conn,$magazyn);
    if(mysqli_num_rows($res) == 0)
    {
      echo '<script>alert("Nie ma takiego adresu magazynu!!!")</script>';
    }
    else
    {
      while($row=mysqli_fetch_assoc($res))
      {
         $idm = $row['id'];
      }
      $where .= "id_magazynu = '".$idm."' and ";
    }
  }

  if(!empty($dd)) {
    $where .= "data_dostawy = '".$dd."' and ";
  }

  // Pozycje ze zmiana
  if(!empty($gz)) {
    $pracownik_do_zmiany = "select id from pracownicy where godnosc ='".$gz."'";
    $res = mysqli_query($conn,$pracownik_do_zmiany);
    if(mysqli_num_rows($res) == 0)
    {
      echo '<script>alert("Nie ma takiego pracownika!!!")</script>';
    }
    else
    {
      while($row=mysqli_fetch_assoc($res))
      {
         $idpz = $row['id'];
      }
      $set .= "id_pracownika = '".$idpz."', ";
    }
  }

  if(!empty($nz)) {
    $produkt_do_zmiany = "select id from produkty where nazwa ='".$nz."'";
    $res = mysqli_query($conn,$produkt_do_zmiany);
    if(mysqli_num_rows($res) == 0)
    {
      echo '<script>alert("Nie ma takiego produktu!!!")</script>';
    }
    else
    {
      while($row=mysqli_fetch_assoc($res))
      {
         $idnz = $row['id'];
      }
      $set .= "id_produktu = '".$idnz."', ";
    }
  }

  if(!empty($amz)) {
    $magazyn_do_zmiany = "select id from magazyn where adres ='".$amz."'";
    $res = mysqli_query($conn,$magazyn_do_zmiany);
    if(mysqli_num_rows($res) == 0)
    {
      echo '<script>alert("Nie ma takiego adresu magazynu!!!")</script>';
    }
    else
    {
      while($row=mysqli_fetch_assoc($res))
      {
         $idmz = $row['id'];
      }
      $set .= "id_magazynu = '".$idmz."', ";
    }
  }

  if(!empty($ddz)) {
    $set .= "data_dostawy = '".$ddz."', ";
  }
  $update = "update zlecenia".rtrim($set, ", ").rtrim($where, " and ");
  mysqli_query($conn, $update);
}
}
  ?>
  </body>
</html>
