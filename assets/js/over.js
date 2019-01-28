img0_on = new Image(200,40);
img0_on.src="images/icon/041.jpg";
img0_off = new Image(200,40);
img0_off.src="images/icon/04.jpg";

img1_on = new Image(200,40);
img1_on.src="images/icon/031.jpg";
img1_off = new Image(200,40);
img1_off.src="images/icon/03.jpg";

img2_on = new Image(200,40);
img2_on.src="images/icon/021.jpg";
img2_off = new Image(200,40);
img2_off.src="images/icon/02.jpg";

img3_on = new Image(200,40);
img3_on.src="images/icon/011.jpg";
img3_off = new Image(200,40);
img3_off.src="images/icon/01.jpg";

img4_on = new Image(200,40);
img4_on.src="images/icon/051.jpg";
img4_off = new Image(200,40);
img4_off.src="images/icon/05.jpg";

img5_on = new Image(200,40);
img5_on.src="images/icon/061.jpg";
img5_off = new Image(200,40);
img5_off.src="images/icon/06.jpg";

function over_image(parm_name)
    {
        document[parm_name].src = eval(parm_name + "_on.src");
    }
function off_image(parm_name)
    {
        document[parm_name].src = eval(parm_name + "_off.src");
    }