    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
		<script>
		$(document).ready(function(){
			$('#authorgroup').change(function(){
				var aut_group = $(this).val();
				$.ajax({
						url:"searchauthor.php",
						method: "POST",
						data:{authorgId:aut_group},
						dataType: "text";
						success:function(data){
							$('#authorlist').html(data);
						}
					});
			});
		});		
	</script>	
</body>
</html>
<script>
		$(document).ready(function(){
			$('#authorgroup').change(function(){
				var query = $(this).val();
				$.ajax({
						url:"searchauthor.php",
						method: "POST",
						data:{query:query},
						dataType: "text",
						success:function(data){
							$('#authorlist').html(data);
						}
					});
			});
		});		
</script>
