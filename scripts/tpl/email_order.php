<html>
<head>
    <title><?php echo $data['title'] ?></title>
</head>

<body style="width: 98%">
<div style="font-family: Arial; font-size: 16px; width: 100%; padding: 5px 0">
    <div><b>Спасибо, что выбрали наш магазин!</b></div>
    <div>Ваш заказ №<?php echo $data['order_id'] ?></div>
    <div style="margin: 20px 0">
        <b>Общие сведения:</b>
        <br />
        Имя: <?php echo $data['name']; ?><br />
        Email: <?php echo $data['email']; ?><br />
        Телефон: <?php echo $data['phone']; ?><br />
        Адрес: <?php echo $data['address']; ?><br />
        Сообщение: <?php echo $data['message']; ?>
    </div>
    <div ><b>Состав заказа:</b></div>
    <table cellspacing="0" style="border: none; width: 100%; font-size: 14px">
        <thead>
            <th style="text-align: left">id товара</th>
            <th style="text-align: left">Название</th>
            <th style="text-align: left">Цена</th>
            <th style="text-align: left">Количество</th>
        </thead>
        <tbody>
            <?php
            foreach($cart as $cartItem) {
                echo sprintf(
                    "<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
                    $cartItem['id'],
                    $cartItem['name'],
                    $cartItem['price'],
                    $cartItem['count']
                );
            }
            ?>
        </tbody>
    </table>
    <div style="margin: 20px 0">
        Доставка: <?php echo $data['delivery_type']; ?><br />
        Сумма доставки: <?php echo $data['delivery_summa']; ?> рублей<br />
        Итого с доставкой: <?php echo $data['full_summa']; ?> рублей<br />
    </div>
</div>
</body>
</html>