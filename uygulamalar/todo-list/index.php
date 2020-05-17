<?php
    session_start();

    if (!is_array($_SESSION['items'])) {
        $_SESSION['items'] = [];
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($_POST['item'] != '') {
            $_SESSION['items'][] = [
                'item' => $_POST['item'],
                'is_checked' => 0
            ];
        }
        if (isset($_GET['id'])) {
            unset($_GET['id']);
        }
    } else {
        if (is_numeric($_GET['id'])) {
            $id = $_GET['id'];
            switch ($_GET['aksiyon']) {
                case 'sil':
                    unset($_SESSION['items'][$id]);
                    break;
                
                case 'guncelle':
                    if (isset($_SESSION['items'][$id])) {
                        $_SESSION['items'][$id]['is_checked'] = $_GET['isaretle'];
                    }
                    break;
            }
        }
    
        if ($_GET['aksiyon'] === 'tumunu_sil') {
            unset($_SESSION['items']);
        }
    }

    function itemView($key, $value) {
        $check = $value['is_checked'] == 1 ? '-' : '+';
        $isaretle = $value['is_checked'] == 1 ? 0 : 1;
        $tag = $value['is_checked'] == 1 ? 'del' : 'span';
        return "
                    <li>
                        [<a href=\"?id={$key}&aksiyon=sil\">Sil</a>]
                        <a href=\"?id={$key}&aksiyon=guncelle&isaretle={$isaretle}\">[$check]</a>

                        <{$tag}>{$value['item']}</{$tag}>
                    </li>
                ";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Alışveriş Listesi</title>
<body>
    <h2>Alışveriş Listesi</h2>
    <form method="POST">
        <input type="text" name="item" placeholder="Öğe...">
        <button type="submit">Ekle</button>
    </form>
    <ul>
    <?php
        foreach ($_SESSION['items'] as $key => $value) {
            echo itemView($key, $value);
        }

        if (count($_SESSION['items']) > 0) {
            echo "<br><a href=\"?aksiyon=tumunu_sil\">[Tüm öğeleri temizle]</a>";
        }
    ?>
    </ul>

    <form method="GET">
        <input type="hidden" name="aksiyon" value="arama">
        <input type="text" name="item" placeholder="Ara..." value="<?php echo $_GET['item']; ?>">
        <button type="submit">Ara</button>
    </form>

    <ul>
    <?php
        if ($_GET['aksiyon'] == 'arama' && $_GET['item'] != '') {
            foreach ($_SESSION['items'] as $key => $value) {
                if (stristr($value['item'], $_GET['item'])) {
                    echo itemView($key, $value);
                }
            }
        }
    ?>
    </ul>
</body>
</html>
