<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" href="images/todoList.png" type="image/icon type">
    <title>ToDo | Create</title>
    <style>
        .main1{
            height: 90vh;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">
    <svg class="canvas" viewBox="0 0 1920 1080" preserveAspectRatio="xMaxYMid slice" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"><rect width="1920" height="1080" fill="hsl(88, 65%, 15%)"></rect><defs><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1014"><stop stop-color="#5d8a28" offset="0"></stop><stop stop-color="#06140c" offset="0.1"></stop></linearGradient><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1015"><stop stop-color="#5d8a28" offset="0"></stop><stop stop-color="#06140c" offset="0.22857142857142856"></stop></linearGradient><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1016"><stop stop-color="#358a28" offset="0"></stop><stop stop-color="#061412" offset="0.3571428571428571"></stop></linearGradient><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1017"><stop stop-color="#c7f2c0" offset="0"></stop><stop stop-color="#42d7c3" offset="0.48571428571428565"></stop></linearGradient><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1018"><stop stop-color="#daf2c0" offset="0"></stop><stop stop-color="#42d787" offset="0.6142857142857142"></stop></linearGradient><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1019"><stop stop-color="#d0f2c0" offset="0"></stop><stop stop-color="#42d7a5" offset="0.7428571428571429"></stop></linearGradient><linearGradient x1="0.5" y1="0" x2="0" y2="1" id="SvgjsLinearGradient1020"><stop stop-color="#eef2c0" offset="0"></stop><stop stop-color="#42d74c" offset="0.8714285714285713"></stop></linearGradient></defs><path d="M0,-498.8246911691461C70.30001749024294,-476.8078330330131,302.4357415694527,-395.5794551490143,421.8001049414576,-366.72354235234815C541.1644683134625,-337.867629555682,602.9854315302568,-357.26735427921415,716.1861802320294,-325.68921438914947C829.386928933802,-294.1110744990848,972.7965055353488,-215.66520308224707,1101.004597152093,-177.25470301196015C1229.2126887688373,-138.84420294167322,1348.9354961245108,-131.63121594123027,1485.4347299324952,-95.22621396742792C1621.9339637404796,-58.82121199362558,1847.572454988749,18.441721697806944,1920,41.17530883085392L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1014)"></path><path d="M0,-454.9652549857572C56.69934589931029,-435.4693432001408,233.0909121829116,-361.6730302245612,340.1960753958617,-337.98978427205896C447.30123860881184,-314.3065383195567,531.4116671182621,-337.96676764714704,642.6309792777006,-312.8657792707438C753.850291437139,-287.7647908943406,904.6270230666302,-228.36335396891243,1007.5119483524925,-187.3838540136396C1110.3968736383547,-146.40435405836675,1151.8438265381192,-104.7723762925032,1259.9405309928743,-66.9887795391067C1368.0372354476294,-29.2051827857102,1546.082263579835,11.599520033562126,1656.0921750810226,39.31772650673942C1766.1020865822102,67.03593297991671,1876.0153625135038,89.3200038344208,1920,99.32045929995708L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1015)"></path><path d="M0,-259.87238155487C80.7012254256967,-242.63473347599728,325.7837997753161,-202.9844982748647,484.20735255418026,-156.4464930816336C642.6309053330444,-109.9084878884025,793.7965225051108,-30.950792716925143,950.5413166731851,19.355649604516643C1107.2861108412594,69.66209192595844,1263.09967034149,97.16826127834346,1424.676117562626,145.39216084701712C1586.2525647837617,193.61606041569078,1837.4460195937709,281.4812326549684,1920,308.6990470165586L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1016)"></path><path d="M0,-187.3926688268042C72.04092421747946,-170.02250127311902,307.45565225109164,-119.145083966902,432.24554530487677,-83.17166350469304C557.035438358662,-47.19824304248407,626.3381949924808,-18.390480404469663,748.7393583227109,28.447853946449612C871.1405216529411,75.28618829736888,1033.4616252787143,161.33116028431837,1166.6525252862577,197.8583426008226C1299.8434252938011,234.38552491732682,1422.3268459156807,214.67659260722223,1547.884758367971,247.61094784547493C1673.4426708202614,280.5453030837276,1857.9807930613285,370.8222196661947,1920,395.4644740303387L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1017)"></path><path d="M0,-26.66619768972822C87.87679752166021,1.8962184963629056,362.15009520287435,92.19562064476546,527.2607851299613,144.70829942681854C692.3714750570482,197.22097820887163,841.1010024259417,244.7754483105401,990.6641395625213,288.40987500259035C1140.227276699101,332.0443016946406,1269.750297876526,359.5037288373636,1424.639607949439,406.51485957912007C1579.5289180223522,453.52599032087653,1837.43993465824,543.149692807461,1920,570.4766594531291L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1018)"></path><path d="M0,124.03730417757241C61.08573252487403,143.4767517627418,263.0323241683493,209.48296440190637,366.5143951492442,240.67398968858876C469.9964661301391,271.86501497527115,529.0102115536838,282.3484314563295,620.8924258853693,311.18345589766676C712.7746402170549,340.01848033900404,813.8389557364275,371.4274740627164,917.8076811393574,413.6841363366126C1021.7764065422874,455.9407986105088,1128.7013606875057,530.73426617391,1244.7047783029493,564.723429541044C1360.708195918393,598.712592908178,1501.2789832158442,589.1620421952333,1613.8281868320194,617.6191165394166C1726.3773904481945,646.0761908835999,1868.9713644720032,715.8247490950226,1920,735.4658756061439L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1019)"></path><path d="M0,185.83186291182793C67.76982242575045,203.63615599869874,282.1738559619104,251.5775594493013,406.6189345545027,292.6576214330528C531.064013147095,333.73768341680426,617.5140029874075,392.12455660646856,746.6704715555537,432.3122348143369C875.8269401237,472.4999130222052,1048.8924020049517,490.9017887259599,1181.5577459633803,533.7836906802628C1314.2230899218089,576.6655926345658,1419.5888263000224,643.3099035491794,1542.6625353061258,689.6036465401545C1665.7362443122292,735.8973895311296,1857.110422551021,791.2223982784539,1920,811.5461486261137L 1920 1080 L 0 1080 Z" fill="url(#SvgjsLinearGradient1020)"></path></svg>
    <div class="main1 container rounded bg-dark text-info d-flex flex-column m-4 p-4 justify-content-center align-items-center" >
    <h1>Add your ToDo</h1>
    <h4 class="text-success">
        <x-alert />
    </h4>
    <form action="/upload" method="post" class="d-flex flex-column">
        @csrf
        <div class="input-group mb-3">
            <input type="text" name="title" class="form-control outline-none" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
        </div>
        
        <input class="btn btn-success" type="submit" value="Create" />
    </form>
    <br>
    <a class="btn btn-info btn-md" href="/index">Home</a>
    </div>
</body>
</html>