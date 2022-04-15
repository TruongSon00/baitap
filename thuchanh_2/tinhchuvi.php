<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form onsubmit="caculation(event)" action="">
        <label for="chieudai">chieu dai: <span style="color: red;" class="warChieuDai"></span></label><br>
        <input type="text" oninput="handleChange(this.value, 'chieudai')" id="chieudai" name="chieudai" value="0"><br>
        <label for="chieurong">chieu rong: <span style="color: red;" class="warChieuRong"></span></label><br>
        <input type="text" oninput="handleChange(this.value, 'chieurong')" id="chieurong" name="chieurong"
            value="0"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <div style="margin-top: 50px;">
        <p id="chuvi">0</p>
        <p id="dientich">0</p>
    </div>

    <script>
    let dodai = {
        'chieudai': 0,
        'chieurong': 0
    }

    function handleChange(val, type) {
        const warspan = type === 'chieudai' ? 'warChieuDai' : 'warChieuRong'
        if (val != '') {

            if (val == +val) {
                dodai[type] = val
                console.log(dodai[type])
                const war = document.getElementsByClassName(warspan)[0]
                war.innerHTML = ''

            } else {
                const war = document.getElementsByClassName(warspan)[0]
                war.innerHTML = `${type} khong the chua ky tu`
                dodai[type] = 0

            }
        } else {
            const war = document.getElementsByClassName(warspan)[0]
            war.innerHTML = `vui long nhap ${type} `
            dodai[type] = 0

        }
    }

    function caculation(e) {

        e.preventDefault()
        const chuvi = (+dodai['chieudai'] + +dodai['chieurong']) * 2
        const dientich = dodai['chieudai'] * dodai['chieurong']
        const chuvitext = document.getElementById('chuvi')
        const dientichtext = document.getElementById('dientich')
        chuvitext.innerHTML = `chu vi: ${chuvi}`
        dientichtext.innerHTML = `dien tich: ${dientich}`
    }
    </script>
</body>

</html>