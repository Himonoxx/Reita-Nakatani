
//読み込み時の表示
window_load();

//ウィンドウサイズ変更時に更新
window.onresize = window_load();

//サイズの表示
function window_load() {
	var sW,sH,s;
	sW = window.innerWidth;
	sH = window.innerHeight;

	s = sW*sH;


$.ajax({
    type: "POST",
    url: "../resources/views/layouts/app.blade.php",
    data: {"item": s},
        success: function(html){
            alert(html);
        }
    });

}