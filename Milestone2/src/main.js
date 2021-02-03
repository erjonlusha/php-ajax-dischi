// Seconda Milestone:
// Attraverso l’utilizzo di AJAX: al caricamento della pagina ajax chiederà attraverso una chiamata i dischi a php 
// e li stamperà attraverso VueJS.

import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';


let app = new Vue ({
	el: "#app",
    data : {
		autori: [
			
		]
    },
    mounted () {
			axios.get('http://localhost:8088/php-ajax-dischi/apiDb.php')
			.then(response => {
				console.log(response);
				this.autori= response.data.response;
		})
	}
});