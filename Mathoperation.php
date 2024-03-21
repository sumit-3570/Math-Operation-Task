<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        form {
            border: .1px solid black;
            padding: 10px 0px;
            width: 300px;
            margin: 50px auto;
            text-align: center;
            border-radius: 10px;
            background: #59C173;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #5D26C1, #a17fe0, #59C173);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #5D26C1, #a17fe0, #59C173);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        label {
            margin: 10px;
        }

        input {
            margin: 10px;
            background: #636363;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #a2ab58, #636363);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #a2ab58, #636363);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        button {
            padding: 5px 20px;
            margin: 5px 0px;
            border-radius: 8px;
            background: #333333;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #dd1818, #333333);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #dd1818, #333333);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }

        .c2 {
            height: auto;
            display: flex;
            justify-content: space-around;

        }

        .box {
            width: 400px;
            height: 100px;
          
            margin: 50px auto;
            display: flex;
            font-size: 30px;
            justify-content: center;
            align-items: center;
            font-weight: bold;
            background: #fc4a1a;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #f7b733, #fc4a1a);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #f7b733, #fc4a1a);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }

        select {
            height: 21px;
            width: 165px;
            border: .1px solid red;
            margin: 12px 0px;
            background: #c94b4b;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #4b134f, #c94b4b);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #4b134f, #c94b4b);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
    </style>
</head>

<body>
    <form method="post">
        <div class="label1">
            <label for="">Number 1</label>
            <input type="text" name="num1" id="num1">
        </div>
        <div class="label1">
            <label for="">Number 2</label>
            <input type="text" name="num2" id="num2">
        </div>
        <div class="c2">
            <label for="">opr</label>
            <select name="Opr" id="opr">
                <option> Please Select Your Operation</option>
                <option> + </option>
                <option> - </option>
                <option> * </option>
                <option> / </option>
            </select>
        </div>
        <button type="submit">Submit</button>
    </form>
    <div class="box">

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $('form').submit(

        function () {

            let formData = new FormData(this);

            formData.append('key', 'Math Operation Task');

            $.ajax(
                {
                    url: "mathopr_ajax.php",
                    type: "post",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,

                    success: function (resp) {

                        $('.box').text(resp);
                        $('#num1').val('');
                        $('#num2').val('');
                        $('#opr').val('');



                    }
                }
            )

            return false;
        }
    )


</script>

</html>