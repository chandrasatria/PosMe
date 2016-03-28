<script>

    var lengtht = Object.keys( jpos.hasiljson ).length
    var arraypatokan = Object.keys(jpos.hasiljson); 

jQuery(document).ready(function($) {
    $(".clickable-row").click(function(event) {
    	for (var i = 0 ; i < arraypatokan.length ; i++) {
    		if(jpos.hasiljson[arraypatokan[i]][0]["parent"] == event.target.id){
    			console.log(jpos.hasiljson[arraypatokan[i]][0]["name"])
    			var div = document.getElementById('tambahkan');

				div.innerHTML = div.innerHTML + jpos.hasiljson[arraypatokan[i]][0]["name"];
    		}

    	}
       
    
    });
});
</script>