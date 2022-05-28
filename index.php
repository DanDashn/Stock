<?php
        require_once 'conf/conn.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_package/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_package/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_package/favicon-16x16.png">
    <link rel="manifest" href="favicon_package/site.webmanifest">
    <link rel="mask-icon" href="favicon_package/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon"  type="image/icon" href="favicon_package/favicon.ico">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Склад</title>
    <script>
        $(function(){
            $('.prsmtr-table').click(function(){
                $('.table-container2').css('display', 'none'); 
                $('.table-container').css('display', 'flex');   
            });
            $('.personal').click(function(){
                $('.table-container').css('display', 'none'); 
                $('.table-container2').css('display', 'flex');   
            });
            $('.add-odetl-layout').click(function(){
                $('.form-table-container').css('display', 'none'); 
                $('.otdel-form-table-container').css('display','flex');
                $('.cancel').click(function(){
                    $('.otdel-form-table-container').css('display','none');
                });
            });
            $('.add-tovar-layout').click(function(){
                $('.otdel-form-table-container').css('display','none');
                $('.form-table-container').css('display', 'flex');
                $('.cancel').click(function(){
                    $('.form-table-container').css('display', 'none');
                });
            })
            $('.up').click(function(){
                $('.up-form-layout').css('display', 'flex');       
                var row = $(this).closest("tr");
                var tovar = {
                    thisid: row.find(".edit.up.idindex").attr('value'),
                    thisname: row.find(".tov-name.nameindex").html(),
                    thisimg:  row.find(".tovar-img.imgindex").attr('src'),
                    thisedizm: row.find(".edizmindex").html(),
                    thiskolichestvo: row.find(".kolichestvoindex").html(),
                    thiscena: row.find(".cenaindex").html(),
                    thisotdel: row.find(".otdelindex").html()
                };
                var mixOtdelSelect = document.getElementById("up-otdel-val"),
                mixOtdels = mixOtdelSelect.children,
                mixOtdelsLen = mixOtdels.length;
                var otdelindex = [];
                var otdelval = [];
                for (var i = 0;  i < mixOtdelsLen; i++){
                    var val = mixOtdels[i].value;
                    var otdeltxt = mixOtdels[i];
                    otdelindex.push(val);
                    otdelval.push(otdeltxt);
                    if (tovar.thisotdel == otdeltxt.text){
                        var dopval = otdeltxt.value;
                    }               
                }
                var upform = $('.form-uping').closest(".up-form-content-table");
                var upthisform  = {
                    thisformid: upform.find(".id").val(tovar.thisid),
                    thisformname: upform.find(".name").val(tovar.thisname),
                    thisformimg:  upform.find(".img").val(tovar.thisimg),
                    thisformedizm: upform.find(".edizm").val(tovar.thisedizm),
                    thisformkolichestvo: upform.find(".kolichestvo").val(tovar.thiskolichestvo),
                    thisformcena: upform.find(".cena").val(tovar.thiscena),
                    thisformotdel: upform.find(".upotdel").val(dopval)
                };
            });
            $('.up-close-button').click(function(){
                $('.up-form-layout').css('display','none');
            });
            $('button.add-button').on('click',function(){
                var nameValue = $('input.name').val();
                var kolichestvoValue = $('input.kolichestvo').val();
                var cenaValue = $('input.cena').val();
                var otdelValue = $("input.otdel").val();
                alert('Новый товар: ' + nameValue + '\nКоличество: '+ kolichestvoValue + '\nЦена: ' + cenaValue );
            });
            $('button.add-otdel-button').click(function(){
                var otdelnameValue = $('input.newotdelname').val();
                alert('Новый Отдел: ' + otdelnameValue);
            });
            $('.otdelup').click(function(){
                $('.otdel-up-form-layout').css('display', 'flex');       
                var otdeluprow = $(this).closest("tr");
                var otdelclass = {
                    thisotdelid: otdeluprow.find(".edit.otdelup.otdelidindex").attr('value'),
                    thisotdelname: otdeluprow.find(".otdelnameindex").html()
                };
                var upotdelform = $('.otdel-form-uping').closest(".up-form-content-table");
                var upthisform  = {
                    thisformid: upotdelform.find(".id").val(otdelclass.thisotdelid),
                    thisformname: upotdelform.find(".name").val(otdelclass.thisotdelname),
                };
            });
            $('.otdel-up-close-button').click(function(){
                $('.otdel-up-form-layout').css('display','none');
            });
            // ------------------------------------------------------------------------------------------------------
            // ------------------------------------------------------------------------------------------------------
            $('tr').on('click',function(){
                $('tr').css('background-color', '');
                $(this).css('background-color', '#709286');  
            });
            // ------------------------------------------------------------------------------------------------------
        });
    </script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Open+Sans:wght@300;600&family=Source+Sans+Pro:wght@300;700&display=swap" rel="stylesheet">
    <style>
    *{
        padding: 0;
        margin: 0;  
        list-style-type: none;
        text-decoration: none;
        text-transform:none;
        font-family: 'Lato', sans-serif;
    }
    body{
        background: #bce3cc;
         font-family: 'Lato', sans-serif;

    }
   .add-button,
   .add-otdel-button{
        color: #fff;
        cursor: pointer;
        background-color: #80436a;
        font-size: 1em;
        border: none;
        width: 100%;
        font-family: 'Open Sans', sans-serif;
        box-shadow: 0 0 5px #80436a,
                    0 0 10px #80436a;
        padding: 10px 20px;
    }
    .cancel,
    .up-close-button,
    .otdel-up-close-button{
        color: #fff;
        cursor: pointer;
        background-color: #000;
        font-size: 1em;
        border: none;
        width: 100%;
        box-shadow: 0 0 5px #000,
                    0 0 10px #000;
        padding: 10px 20px;
    } 
    .table-container,
    .table-container2{
        display: none;
        justify-content: end;
        height: auto;
        margin-bottom: 10%;
        margin-top: 5%;
    }
    .table-container2{
        display: flex;
        justify-content: end;
        height: auto;
        margin-bottom: 10%;
        margin-top: 5%;
    }
    .delete{
        text-align: center;
        cursor: pointer;
        width: 100%;
        color: #fff;
        margin: 3% 0;
        cursor: pointer;
        background-color: #a7a7a7;
        font-size: 1em;
        border: none;
        font-family: 'Open Sans', sans-serif;
        box-shadow: 0 0 5px #a7a7a7,
                    0 0 10px #a7a7a7;
        padding: 3% 2%;
    }
    p.delete a, p.edit a {
        color: black;
        font-family: 'Open Sans', sans-serif;
    }
    .edit{
        margin: 3% 0;
        width: 100%;
        color: #fff;
        cursor: pointer;
        background-color: #852369;
        font-size: 1em;
        border: none;
        box-shadow: 0 0 5px #852369,
                    0 0 10px #852369;
        padding: 3% 2%;
        font-family: 'Open Sans', sans-serif;
    }
    .content-table {
        width: 75%;
        margin-right: 5%;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-collapse: collapse; 
        border: 3px solid #009A63;
        background: #fff!important;
    }
    .up-form-content-table{
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-collapse: collapse; 
        border: 3px solid  #009A63;
        background: #fff!important;
    }
    .otdel-up-form-content-table{
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-collapse: collapse; 
        border: 3px solid  #009A63;
        background: #fff!important;
    }
    table th {
	    font-weight: bold;
	    background: #009A63;
	    border: none;
	    text-align: left;
    }
    table tbody tr:nth-child(even){
        background: #b9f0cd!important;
    }
    header {
        color: rgb(66 92 199);
        margin-top: 10%;
        position: fixed;
    }
    table tbody tr{
        background-color: #b9f0cd;
        border: 2px solid #009A63;
    }
    table thead tr th {
        padding: 30px 10px;
        
    }
    table tbody tr td {
        padding:  0 10px;
        width: 15%;
    }
    .edit-delete{
        width: 10%;
    }
    table tbody tr  td.name-cont {
        /*padding: 10px;/* tp */
        width: 30%;
    }
    table tbody tr  td.name-cont > .name-cont-div{
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-content: center;
        align-items: center;
    }
    table tbody tr td .tovar-img-container{
        width: 150px;
        height: 120px;
    }
    table tbody tr td .tovar-img{
        background-attachment: cover;
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10%;
    }
    table tbody tr td  p.tov-name {
        word-wrap: break-word; 
    }
    nav ul li {
        list-style-type: none;
        display: inline;
    }
    nav ul li p {
        text-decoration: none;
        color: #bce3cc;
        background: red;
        font-weight: 400;
        font-size: 20px;
        background-color:#852369;
        padding: 15px 40px;
    }
    nav ul li p:hover {
        background-color: rgb(138, 170, 189);
        cursor: pointer;
        color: black;
    }
    nav ul li p a{
        color: black;
    }
    nav ul li p a:hover{
        color: #852369;
    }
    .up-form-layout{
        position: fixed;
        z-index: 1;
        height: 100%;
        margin: -20%;
        padding: 15% 20%;
        width: 100%;
        background-color: #009a6352;
        display: none;
        justify-content: center;
        align-items: center;
    } 
    .otdel-up-form-layout{
        position: fixed;
        z-index: 1;
        height: 100%;
        width: 55%;
        margin: -20%;
        padding: 15%;
        background-color: #009a6352;
        justify-content: center;
        align-items: center;
        display: none;
    }
    .form-uping{
        background-color: #fff;
        width: 300px;
        padding: 30px 100px;
        position: relative;
    }
    .form-uping label {
        display: block;
    }
    .form-uping label input, select{
        display: block;
        width: 100%;
        margin: 10px 0 15px;
        font-size: 20px;
        font-family: 'Open Sans', sans-serif;
    }
    .body-container{
        display: flex;
        margin-top: 5%;
    }
    .body-container div{
        flex: 1;
    }
    .body-container div.table-container {
        flex: 4;
    }
    .form-table-container{
        display: none;
        justify-content: end;
        height: auto;
        padding-top: 10%;
    }
    .otdel-form-table-container{
        display: none;
        justify-content: end;
        height: auto;
        padding-top: 10%;  
    }
    .form-content-table{
        width: 75%;
        margin-right: 5%;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-collapse: collapse; 
        border: 3px solid #009A63;
        background: #fff!important; 
    }
    .form-content-table tbody tr td{
        width: 10%;
        padding: 10px 10px 10px 10px;
    }
    .form-content-table tbody tr td input,
    .form-content-table tbody tr td select{
        height: 30px;
        width: 100%;
        border: 2px solid  #80436a;
    }
    .form-content-table tbody tr td input.kolichestvo,
    .form-content-table tbody tr td input.cena,
    .form-content-table tbody tr td input.edizm{
        height: 30px;
        width: 100%;
    }
    .form-content-table tbody tr td.adding-selec-td{
        width: 20%;
    }
    .up-form-content-table{
        width: 75%;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        border-collapse: collapse; 
        border: 3px solid #009A63;
        background: #fff!important; 
    }
    .up-form-content-table tbody tr td{
        width: 10%;
        padding: 10px 10px 10px 10px;
    }
    .up-form-content-table tbody tr td input,
    .up-form-content-table tbody tr td select {
        height: 30px;
        width: 100%;
        background: #fff;
        border: 2px solid  #852369;
    }
    .up-form-content-table tbody tr td input.kolichestvo,
    .up-form-content-table tbody tr td input.cena,
    .up-form-content-table tbody tr td input.edizm{
        height: 30px;
        width: 100%;
    }
    .up-form-content-table tbody tr td.adding-selec-td{
        width:20%;
    }
    .table-container2 table th,
    .table-container2 table td,
    .otdel-form-table-container table th,
    .otdel-form-table-container table td{
        text-align: center;
        font-size: 2em;
        font-family: 'Source Sans Pro', sans-serif;

    }
    .container{
            display: grid;
        }
        .container div{

        }

        div.box-1{
            grid-column: 2/6;
            grid-row: 1/2;

        }
        div.box-2{

            grid-column: 1/2;
            grid-row: 1/4;
        }
        div.box-3{

            grid-column: 2/6;
            grid-row: 2/4;
        }
        div.logo-cont{
            background-color: #852369;
            text-align: center;
            width: 100%;
            position: fixed;
            justify-content: center;
            padding: 1%;
            align-items: center;
            display: grid;
            grid-template-columns: repeat(2,1fr 3fr);
            font-family: 'Open Sans', sans-serif;

        }
    </style>
</head>
<body>
    <div class="otdel-up-form-layout">
        <table class="up-form-content-table">  
            <form class="otdel-form-uping" action="vendor/update.php" method="post" > 
                <thead>
                    <tr>
                        <th>
                            <button class="add-button">Сохранить</button>
                        </th>
                        <th>Наименование</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="otdel-up-close-button" type="reset">Отмена</button>
                        </td>
                        <td>
                            <label>
                                <input  class="id" type="hidden" name="id" value="">
                                <input class="name" type="text" name="name"  value="" required>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </form>
        </table>
    </div>
    <div class="up-form-layout">
        <table class="up-form-content-table">  
            <form class="form-uping" action="vendor/update.php" method="post" > 
                <thead>
                    <tr>
                        <th>
                            <button class="add-button">Сохранить</button>
                        </th>
                        <th>Наименование</th>
                        <th>адрес изображения</th>
                        <th>Ед. изм.</th>
                        <th>Количество</th>
                        <th>цена</th>
                        <th>отдел</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="up-close-button" type="reset">Отмена</button>
                        </td>
                        <td>
                            <label>
                                <input  class="id" type="hidden" name="id" value="">
                                <input class="name" type="text" name="name"  value="" required>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="img" type="text" name="img"  value="" required>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="edizm" type="text" name="edizm" required>
                            </label>
                        </td>
                        <td>            
                            <label>
                                <input class="kolichestvo" type="text" name="kolichestvo" required>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="cena" type="text" name="cena"  value="" required>
                                
                            </label>    
                        </td>
                        <td class="adding-selec-td">
                            <label>
                            <!--БЭМ часть вывода списка городов в секцию-->
                            <select id="up-otdel-val" class="upotdel" name="upotdel" required>
                                <?php
                            $otdels = mysqli_query($ks_handler, "SELECT * FROM otdel");

                            $otdels= mysqli_fetch_all($otdels);
                            
                            foreach ($otdels as $otdel) {
                            ?>
                                    <option value="<?= $otdel[0] ?>"><?= $otdel[1] ?></option>
                                    <?php
                            }
                            ?>
                                </select>
                        <!-------------------------------------------------------------->
                            </label>
                        </td> 
                    </tr>
                </tbody>
            </form>
        </table>
    </div>
    <div class="logo-cont">
        <div>
        <img src="icons/logo.png" width="70" alt="">
        </div>
    
        <div class="ccc">
            <h1>Склад промышленных товаров</h1>
        </div>  
    </div>

    <div class="container">
        <div class="box-1">
        <div class="form-table-container">
        <table class="form-content-table">  
            <form   action="vendor/create.php" method="post" >  
                <thead>
                    <tr>
                        <th>
                            <button class="add-button" >Добавить</button>
                        </th>
                        <th>Наименование</th>
                        <th>адрес изображения</th>
                        <th>Ед. изм.</th>
                        <th>Количество</th>
                        <th>цена</th>
                        <th>отдел</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="cancel" type="reset">Отмена</button>
                        </td>
                        <td>
                            <label>
                                <input class="name" type="text" name="name"  value="" required>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="img" type="text" name="img" required>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="edizm" type="text" name="edizm" required>
                            </label>
                        </td>
                        <td>            
                            <label>
                                <input class="kolichestvo" type="text" name="kolichestvo" required>
                            </label>
                        </td>
                        <td>
                            <label>
                                <input class="cena" type="text" name="cena"  value="" required>
                            </label>    
                        </td>
                        <td class="adding-selec-td">
                            <label>
                            <!--БЭМ часть вывода списка городов в секцию-->
                                <select  class="otdel" name="otdel" required>
                                <?php
                            $otdels = mysqli_query($ks_handler, "SELECT * FROM otdel");

                            $otdels= mysqli_fetch_all($otdels);
                            
                            foreach ($otdels as $otdel) {
                            ?>
                                    <option value="<?= $otdel[0] ?>"><?= $otdel[1] ?></option>
                                    <?php
                            }
                            ?>
                                </select>
                        <!-------------------------------------------------------------->
                            </label>
                        </td> 
                    </tr>
                </tbody>
            </form>
        </table>
    </div>
    <div class="otdel-form-table-container">
        <table class="form-content-table">  
            <form   action="vendor/create_otdel.php" method="post" >  
                <thead>
                    <tr>
                        <th>
                            <button class="add-otdel-button" >Добавить</button>
                        </th>
                        <th>отдел</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="cancel" type="reset">Отмена</button>
                        </td>
                        <td>
                            <label>
                                <input class="newotdelname" type="text" name="newotdelname" value=""  placeholder="Название отдела"required>
                            </label>
                        </td>
                    </tr>
                </tbody>
            </form>
        </table>
    </div>
        </div>
        <div class="box-2">
            <header>
                <nav>
                    <ul>

                        <li><p class="prsmtr-table">Товары</p></li>
                        <li><p class="add-odetl-layout">Добавить отдел</p></li>
                        <li><p class="add-tovar-layout">Добавить товар</p></li>
                        <li><p class="personal">Отделы</p></li>
                        <li><p><a href="tel:+7(495)118-10-11">Тех.Поддержка</a></p></li>
                    </ul>
                </nav>
            </header>
        </div>
        <div class="box-3">
            <div class="body-container"> 
                <div class="table-container">
                    <table class="content-table">   
                        <thead>
                            <tr>
                                <th></th>
                                <th>товар</th>
                                <th>Количество и Ед. изм.</th>

                                <th>цена в рублях</th>
                                <th>отдел</th>
                            </tr>
                        </thead>
                        <?php
                        $tovari = mysqli_query($ks_handler, " SELECT x.id, x.name, x.img, x.edizm, x.kolichestvo, x.cena, o.name
                        FROM xoz_tovari x 
                        left join otdel o on x.otdel_id=o.id");
                        $tovari= mysqli_fetch_all($tovari);
                        foreach ($tovari as $tovar) {
                        ?>
                        <tbody>
                            <tr>
                                <td class="edit-delete">
                                    <p class="edit up idindex"  value="<?= $tovar[0] ?>"> Редактировать</p>
                                    <p class="delete"><a href="vendor/delete.php?id=<?= $tovar[0] ?>">Удалить </a></p>
                                </td>
                                <td class="name-cont">
                                    <div class="name-cont-div">
                                        <div class="tovar-img-container">
                                            <img class="tovar-img imgindex" src="<?= $tovar[2] ?>" alt="">
                                        </div>
                                        <div>
                                            <p class="tov-name nameindex"><?= $tovar[1] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="kolichestvoindex" ><?= $tovar[4] ?></span>
                                    <span class="edizmindex"><?= $tovar[3] ?></span>
                                </td>
                                <td class="cenaindex"><?= $tovar[5] ?></td>
                                <td class ="otdelindex"><?= $tovar[6] ?></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                    </table>
                </div> 
                <div class="table-container2">
                    <table class="content-table">   
                        <thead>
                            <tr>
                                <th></th>   
                                <th>Отдел</th>
                            </tr>
                        </thead>
                        <?php
                        $otdelesnames = mysqli_query($ks_handler, " SELECT *
                        FROM otdel ");
                        $otdelesnames= mysqli_fetch_all($otdelesnames);
                        foreach ($otdelesnames as $otdelename) {
                        ?>
                        <tbody>
                            <tr>
                                <td class="edit-delete">
                                    <p class="edit otdelup otdelidindex"  value="<?= $otdelename[0] ?>"> Редактировать</p>
                                    <p class="delete"><a href="vendor/delete_otdel.php?id=<?= $otdelename[0] ?>">Удалить </a></p>
                                </td>
                                <td  class ="otdelnameindex"><?= $otdelename[1] ?></td>
                            </tr>
                        </tbody>
                    <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>