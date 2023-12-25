<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'class.php';

$url = "Telif hakları nedeniyle paylasamadıgım url";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$html = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'cURL Hata: ' . curl_error($ch);
} else {
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpCode === 200) {
        
        $veri = str_get_html($html);

        if ($veri !== false) {
            
            $id1 = "MARBL";
            $item1 = $veri->find("tr#h_tr_id_$id1", 0);
            if ($item1) {
                $fiyat1 = $item1->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni1=0;
                $fiyatDegiskeni1 = floatval(str_replace(',', '.', $fiyat1));
            }
            
            $id2 = "SURGY";
            $item2 = $veri->find("tr#h_tr_id_$id2", 0);
            if ($item2) {
                $fiyat2 = $item2->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni2=0;
                $fiyatDegiskeni2 = floatval(str_replace(',', '.', $fiyat2));
            }
            
            $id3 = "MEGMT";
            $item3 = $veri->find("tr#h_tr_id_$id3", 0);
            if ($item3) {
                $fiyat3 = $item3->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni3=0;
                $fiyatDegiskeni3 = floatval(str_replace(',', '.', $fiyat3));
            }
            
            $id4 = "KBORU";
            $item4 = $veri->find("tr#h_tr_id_$id4", 0);
            if ($item4) {
                $fiyat4 = $item4->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni4=0;
                $fiyatDegiskeni4 = floatval(str_replace(',', '.', $fiyat4));
            }
            
            $id5 = "CATES";
            $item5 = $veri->find("tr#h_tr_id_$id5", 0);
            if ($item5) {
                $fiyat5 = $item5->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni5=0;
                $fiyatDegiskeni5 = floatval(str_replace(',', '.', $fiyat5));
            }
            
            $id6 = "SKYMD";
            $item6 = $veri->find("tr#h_tr_id_$id6", 0);
            if ($item6) {
                $fiyat6 = $item6->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni6=0;
                $fiyatDegiskeni6 = floatval(str_replace(',', '.', $fiyat6));
            }
            
            $id7 = "BEGYO";
            $item7 = $veri->find("tr#h_tr_id_$id7", 0);
            if ($item7) {
                $fiyat7 = $item7->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni7=0;
                $fiyatDegiskeni7 = floatval(str_replace(',', '.', $fiyat7));
            }
            
            $id8 = "AGROT";
            $item8 = $veri->find("tr#h_tr_id_$id8", 0);
            if ($item8) {
                $fiyat8 = $item8->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni8=0;
                $fiyatDegiskeni8 = floatval(str_replace(',', '.', $fiyat8));
            }
            
            $id9 = "EKOS";
            $item9 = $veri->find("tr#h_tr_id_$id9", 0);
            if ($item9) {
                $fiyat9 = $item9->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni9=0;
                $fiyatDegiskeni9 = floatval(str_replace(',', '.', $fiyat9));
            }
            
            $id10 = "BINHO";
            $item10 = $veri->find("tr#h_tr_id_$id10", 0);
            if ($item10) {
                $fiyat10 = $item10->find('.center[id^=h_td_fiyat_id_]', 0)->plaintext;
                $fiyatDegiskeni10=0;
                $fiyatDegiskeni10 = floatval(str_replace(',', '.', $fiyat10));
            }
            
        } else {
            echo "HTML içeriği analiz edilemedi.";
        }
    } else {
        echo "HTTP Hata: $httpCode";
    }
}

curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halka Arz Hesaplama Robotu</title>
</head>
<body>
<div class="baslik"><h1>Son 10 Halka arz hesaplama robotu</h1></div>
<form method="post" action="#">
<div class="tablolar">
    <table>
        <tr>
            <td><span>MARBL     </span> <span>    Anlık fiyat: <?php echo $fiyatDegiskeni1 ?></span> <input type="number" name="tam_sayi1" id="tam_sayi1" required value='0'></td>  
        </tr>
        <tr>
            <td><span>SURGY     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni2 ?></span> <input type="number" name="tam_sayi2" id="tam_sayi2" required value='0'></td>  
        </tr>
        <tr>
            <td><span>MEGMT     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni3 ?></span> <input type="number" name="tam_sayi3" id="tam_sayi3" required value='0'></td>  
        </tr>
        <tr>
            <td><span>KBORU     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni4 ?></span> <input type="number" name="tam_sayi4" id="tam_sayi4" required value='0'></td>  
        </tr>
        <tr>
            <td><span>CATES     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni5 ?></span> <input type="number" name="tam_sayi5" id="tam_sayi5" required value='0'></td>  
        </tr>
    </table>

    <table>
        <tr>
            <td><span>SKYMD     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni6 ?></span> <input type="number" name="tam_sayi6" id="tam_sayi6" required value='0'></td>  
        </tr>
        <tr>
            <td><span>BEGYO     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni7 ?></span> <input type="number" name="tam_sayi7" id="tam_sayi7" required value='0'></td>  
        </tr>
        <tr>
            <td><span>AGROT     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni8 ?></span> <input type="number" name="tam_sayi8" id="tam_sayi8" required value='0'></td>  
        </tr>
        <tr>
            <td><span>EKOS      </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni9 ?></span> <input type="number" name="tam_sayi9" id="tam_sayi9" required value='0'></td>  
        </tr>
        <tr>    
            <td><span>BINHO     </span><span>    Anlık fiyat: <?php echo $fiyatDegiskeni10?></span> <input type="number" name="tam_sayi10" id="tam_sayi10" required value='0'></td>  
        </tr>
    </table>
    <?php
    $total=0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcıdan gelen tam sayı değerlerini alın
    $tam_sayi1 = filter_input(INPUT_POST, 'tam_sayi1', FILTER_VALIDATE_INT);
    $tam_sayi2 = filter_input(INPUT_POST, 'tam_sayi2', FILTER_VALIDATE_INT);
    $tam_sayi3 = filter_input(INPUT_POST, 'tam_sayi3', FILTER_VALIDATE_INT);
    $tam_sayi4 = filter_input(INPUT_POST, 'tam_sayi4', FILTER_VALIDATE_INT);
    $tam_sayi5 = filter_input(INPUT_POST, 'tam_sayi5', FILTER_VALIDATE_INT);
    $tam_sayi6 = filter_input(INPUT_POST, 'tam_sayi6', FILTER_VALIDATE_INT);
    $tam_sayi7 = filter_input(INPUT_POST, 'tam_sayi7', FILTER_VALIDATE_INT);
    $tam_sayi8 = filter_input(INPUT_POST, 'tam_sayi8', FILTER_VALIDATE_INT);
    $tam_sayi9 = filter_input(INPUT_POST, 'tam_sayi9', FILTER_VALIDATE_INT);
    $tam_sayi10 = filter_input(INPUT_POST, 'tam_sayi10', FILTER_VALIDATE_INT);
   


    // Her iki girişi de kontrol edin
    if
    (
    $tam_sayi1 === false || $tam_sayi1 < 0 ||
    $tam_sayi2 === false || $tam_sayi2 < 0 ||
    $tam_sayi3 === false || $tam_sayi3 < 0 ||
    $tam_sayi4 === false || $tam_sayi4 < 0 ||
    $tam_sayi5 === false || $tam_sayi5 < 0 ||
    $tam_sayi6 === false || $tam_sayi6 < 0 ||
    $tam_sayi7 === false || $tam_sayi7 < 0 ||
    $tam_sayi8 === false || $tam_sayi8 < 0 ||
    $tam_sayi9 === false || $tam_sayi9 < 0 ||
    $tam_sayi10 === false || $tam_sayi10 < 0 
    ) {
                echo "Lütfen geçerli tam sayı değerleri girin.";
    }
    $sonuc1=$tam_sayi1*$fiyatDegiskeni1;
    $sonuc2=$tam_sayi2*$fiyatDegiskeni2;
    $sonuc3=$tam_sayi3*$fiyatDegiskeni3;
    $sonuc4=$tam_sayi4*$fiyatDegiskeni4;
    $sonuc5=$tam_sayi5*$fiyatDegiskeni5;
    $sonuc6=$tam_sayi6*$fiyatDegiskeni6;
    $sonuc7=$tam_sayi7*$fiyatDegiskeni7;
    $sonuc8=$tam_sayi8*$fiyatDegiskeni8;
    $sonuc9=$tam_sayi9*$fiyatDegiskeni9;
    $sonuc10=$tam_sayi10*$fiyatDegiskeni10;
    
    $total=$sonuc1+$sonuc2+$sonuc3+$sonuc4+$sonuc5+$sonuc6+$sonuc7+ $sonuc8+$sonuc9+$sonuc10;
}
?>
    <div>
        <input style="background-color: red; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px; margin-left:65%;" id="in" type="submit" value="Gönder">
        <span class="outt">TOPLAM TL MİKTARI
            <?php
                echo "      ";
                echo $total;
            ?>
        </span>
    </div>
    
</div>
</form>




</body>
</html>