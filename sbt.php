<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo</title>
	<script language="JavaScript" type="text/javascript" CHARSET="UTF-8" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
	
    <script type="text/javascript" src="http://jwpsrv.com/library/echLdpbKEeSi8w4AfQhyIQ.js"></script>
		<script type="text/javascript">jwplayer.key="cbPZjCLEJ+O5oZl0AvaDQqyb50+ydDAD5kEqJuS10Zg=";</script>
		<div id="vplayer" style="width:100%;height:100%;text-align:center;"></div>


			<script type="text/javascript">
		    jwplayer("vplayer").setup({
		        sources: [{
		            file: "http://192.99.46.182:1935/pioneira-tv3/pioneira-tv3/live.m3u8",
		            label: "Auto"
		        }],
		        width: $(window).width(),
		        height: $(window).height(),
		        preload: "none",
		        primary: "html5",
		        cast: {}
		    });
		    var jw_retry_count = 0;
		    jwplayer().onError(function() {
		        if (jw_retry_count < 6) {
		            setTimeout(function() {
		                jw_retry(jwplayer("vplayer").getPlaylistItem()["file"]);
		            }, 2000);
		        }
		    });

		    function jw_retry($v) {
		        jwplayer().load([{
		            sources: [{
		                file: $v,
		                label: "Auto"
		            }]
		        }]);
		        jwplayer().play();
		        jw_retry_count = jw_retry_count + 1;
		    }
		</script>
</body>
</html>