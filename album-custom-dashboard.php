<?php
/*
Plugin Name: Album Custom Dashboard
Plugin URI: https://www.agenncealbum.com
Description: Agence Album
Author: Florian Moreno
Author URI: https://www.agencealbum.com/notre-equipe
GitHub Plugin URI: https://github.com/agencealbum/album-custom-dashboard
Version: 1.1
*/
/**
 * Creates a link to the settings page under the WordPress Settings in the dashboard
 */

function my_custom_dashboard_widgets() {
	global $wp_meta_boxes;

	wp_add_dashboard_widget('custom_help_widget', 'Assistance', 'custom_dashboard_help');
}


function custom_dashboard_help() {
	echo '
	<h2 style="border-bottom: 2px solid #8b6dc3;display: inline-block;">Agence Album</h2>
	<p>
	<ul>
	<li><b>Mail: </b> support@agencealbum.com</li>
	<li><b>Téléphone:</b> 03 85 38 37 83</li>
	</ul>
	</p>
	';
}

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');



add_action('login_form', 'album_login_form');
function album_login_form()
{
  ?>
    <div class="album-bar">Authentification</div>
    <?php
}

add_action('lostpassword_form', 'album_lostpassword_form');
function album_lostpassword_form()
{
  ?>
    <div class="album-bar">Mot de passe oublié?</div>
    <?php
}


function custom_login_logo() { ?>
    <style type="text/css">
    body{ background: #343a40!important; }

    .login #backtoblog a, .login #nav a{ color:  #fff!important; }

    .login .album-bar{
    	    position: absolute;
    width: 100%;
    left: 0;
    top: 0px;
    background: rgba(110,61,117,.9);
    color: #fff;
    padding: 10px 25px;
    }

    .login .message, .login .success{
    	    border-left: 4px solid #834c86!important;
    }

    .wp-core-ui .button-primary {
    background: #834c86!important;
    border: none!important;
    text-shadow: none!important;
    box-shadow: none!important;
}

    .login form{
    	    position: relative;
    padding-top: 50px!important;
    }

    .login #nav{
        text-align: center;
    }

    .forgetmenot, #backtoblog { display: none!important; }

    .login #login_error, .message{
        margin-top: 2rem!important;
    }

    .login .button-primary{
        width: 100%!important;
    }
        #login h1 a, .login h1 a {
           background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9IiNmZmYiIHdpZHRoPSIyMDQiIGhlaWdodD0iNDciPjxwYXRoIGQ9Ik01Ny4yNDIgMjguMDQ5SDU3LjJjLS41NzcgMS4yNTMtMi4wMzkgMS45MzQtMy4zMzYgMS45MzQtMi45ODcgMC0zLjQ1OS0yLjAxNy0zLjQ1OS0yLjk2NCAwLTMuNTIyIDMuNzQ4LTMuNjg4IDYuNDY2LTMuNjg4aC4yNDh2LS41MzZjMC0xLjc5LjM5LTIuNjk3LTEuMzU5LTIuNjk3LTEuMDkgMC0yLjEyLjI0Ni0zLjA4OS44NjR2LTEuMjU4Yy44MDUtLjM4OSAyLjE2MS0uNzE4IDMuMDg5LS43MTggMi41OTQgMCAyLjY1NyAxLjE3NSAyLjY1NyAzLjkxNXY0LjYzMmMwIC44NDUgMCAxLjQ4My4xMDIgMi4yMDRoLTEuMjc1di0xLjY4OHptLS4xMjQtMy42MDZoLS4zN2MtMi4yNDUgMC00LjkyNC4yMjYtNC45MjQgMi41MzQgMCAxLjM4Ljk5IDEuODk1IDIuMTg1IDEuODk1IDMuMDQ2IDAgMy4xMDktMi42NTggMy4xMDktMy43OXYtLjYzOXptMTIuNzA2IDQuNDI5YzAgMi45MjUtMS4zMTkgNS4zMTItNC45MjMgNS4zMTJ2LTEuMTEyYzMuMzM5IDAgMy42NDYtMi40MyAzLjY0Ni01LjM5NWgtLjA0M2MtLjY5OSAxLjUyNC0xLjg1MiAyLjA2LTMuMTkgMi4wNi0zLjM1OCAwLTQuNDI3LTIuOTI1LTQuNDI3LTUuMjUyIDAtMy4xOTEgMS4yMzUtNS40OTkgNC4zMjMtNS40OTkgMS40IDAgMi4zMDguMTg2IDMuMjc0IDEuNDQxbDEuMzM5LTEuMTk0djkuNjM5em0tNC40ODktLjI1YzIuMzQ2IDAgMy4xNDktMi4xIDMuMTkxLTQuMTM4LjA0My0yLjEwMS0uNzQxLTQuMzg2LTMuMTExLTQuMzg2LTIuNDcgMC0zLjExIDIuMzQ3LTMuMTEgNC4zODYuMDAxIDIuMDU5LjgyNiA0LjEzOCAzLjAzIDQuMTM4em0xNC42NjEuNzg2Yy0uOTA2LjM2OS0yLjA3OS41NzQtMy4wNDYuNTc0LTMuNDgxIDAtNC43NzctMi4zNDgtNC43NzctNS40OTggMC0zLjIxMSAxLjc3LTUuNDk5IDQuNDI2LTUuNDk5IDIuOTY2IDAgNC4xODEgMi4zODkgNC4xODEgNS4yMDl2LjY1OGgtNy4xODdjMCAyLjIyNCAxLjE5NCA0LjAxOSAzLjQ1OCA0LjAxOS45NDggMCAxLjkxNi0uMzkzIDIuNTM1LS43ODVsLjQxIDEuMzIyem0tLjYzOC01LjY2NGMwLTEuODM1LS43NDItMy42NDYtMi42NzctMy42NDYtMS45MTUgMC0zLjA4OCAxLjkxNi0zLjA4OCAzLjY0Nmg1Ljc2NXptMy44OTItMi4wMzljMC0uODA1IDAtMS42MjgtLjA4MS0yLjQ3M2gxLjI1NXYxLjg3NGguMDQxYy40MzMtLjk0NSAxLjIxNC0yLjEyMSAzLjM5OC0yLjEyMSAyLjU5NSAwIDMuNTgzIDEuNzMgMy41ODMgNC4wMzd2Ni43MTRIOTAuMTVWMjMuMzVjMC0xLjk3Ni0uNzAyLTMuMjUyLTIuNDkyLTMuMjUyLTIuMzY5IDAtMy4xMDkgMi4wODEtMy4xMDkgMy44MzF2NS44MDhIODMuMjV2LTguMDMyem0xOC4wODEtMS4wN2MtLjctLjMxLTEuMzM3LS41MzctMi4wMzYtLjUzNy0yLjUzNCAwLTMuOTU1IDEuODMyLTMuOTU1IDQuMzg2IDAgMi4zODggMS40NCA0LjM4OCAzLjgxIDQuMzg4LjgyNSAwIDEuMTc0LS4xODggMS45NTQtLjQ3NWwuNTM0IDEuMjE1Yy0uODgzLjMwOS0xLjcwNy4zNy0yLjY5My4zNy0zLjM3OCAwLTUuMDI5LTIuNTc0LTUuMDI5LTUuNDk4IDAtMy4yMzQgMi4wODQtNS40OTkgNS4xOS01LjQ5OSAxLjI1OCAwIDIuMTYzLjI5IDIuNTMyLjQxMmwtLjMwNyAxLjIzOHptOS41NTQgOC43NzJjLS45MDQuMzctMi4wNzguNTc1LTMuMDQ3LjU3NS0zLjQ4IDAtNC43NzgtMi4zNDgtNC43NzgtNS40OTggMC0zLjIxMSAxLjc3Mi01LjQ5OSA0LjQyOC01LjQ5OSAyLjk2OCAwIDQuMTgzIDIuMzg5IDQuMTgzIDUuMjA5di42NThoLTcuMTg4YzAgMi4yMjQgMS4xOTQgNC4wMTkgMy40NTkgNC4wMTkuOTQ4IDAgMS45MTUtLjM5MyAyLjUzNC0uNzg1bC40MDkgMS4zMjF6bS0uNjM3LTUuNjY0YzAtMS44MzQtLjc0Mi0zLjY0NS0yLjY3Ny0zLjY0NS0xLjkxNCAwLTMuMDg5IDEuOTE2LTMuMDg5IDMuNjQ2bDUuNzY2LS4wMDF6bTE0LjMyMS03LjZsLS4xMzYuMDgxLjE4NCAyLjkyMi4zOS0uMzI5YzEuMDI5LS44NjkgMi41NjYtMS40MDkgNC4wMTEtMS40MDkuODM1IDAgMS4zNDkuMTI5IDEuNjEzLjQwMy4yNTUuMjY2LjMxMy43MTMuMzEzIDEuMzE0IDAgLjIyNy0uMDA3LjQ3My0uMDE3Ljc0MWwtLjAxOC43NzgtMi41NjgtLjA1MmMtMi41ODEgMC02Ljk0NSAxLjA1Mi02Ljk0NSA0Ljk5NiAwIDMuMDE1IDIuMDE4IDQuNzQ1IDUuNTM0IDQuNzQ1IDIuMjI2IDAgMy41NTktMS4wNTEgNC4yNTQtMS44MjN2MS40ODVoMy4wMWwtLjEyNC0zLjA4MnYtNS45NTJjMC0zLjg1MS0uMjIyLTYuMjEtNC42MjktNi4yMS0xLjY4NC0uMDAxLTMuMzI0LjQ2OC00Ljg3MiAxLjM5MnptLjE2NCA5LjQ0NWMwLTIuMTgzIDIuOTY3LTIuNTA4IDQuNzMzLTIuNTA4bDEuNDM3LjA0OHYxLjAyMmMwIDIuMTcxLTEuNDM3IDMuNTIyLTMuNzQ4IDMuNTIyLS45NzYuMDAxLTIuNDIyLS42NjMtMi40MjItMi4wODR6bTEzLjY0OS0xNS43MXYyMC4xMTdoMy4xNjRWNi44NDJsLTMuMTY0IDMuMDM2em03LjUwNSAwdjIwLjM5NGwyLjc5Ny0yLjI0MWMuODQ4IDEuMTQ2IDIuNTI2IDIuMzAyIDQuOTYyIDIuMzAyIDQuNzU0IDAgNi40NC00LjMzNSA2LjQ0LTguMDQ1IDAtMy43NTMtMi4wMDEtNy41MzgtNi40NjctNy41MzgtMi4wNyAwLTMuNTQ2Ljc1Ni00LjU2NiAyLjA1NFY2Ljg0MmwtMy4xNjYgMy4wMzZ6bTMuMTY2IDEyLjY5YzAtMi40ODQgMS4yNTMtNS4xNjEgNC01LjE2MS45NTkgMCAxLjc1NS4zMjIgMi4zNzMuOTU0Ljg3OC44OTggMS4zNiAyLjM5OCAxLjMxOSA0LjExNy4wMzMgMS4yMzYtLjMzNCAzLjA3NS0xLjQ2MiA0LjIzMy0uNjIuNjM4LTEuMzguOTYxLTIuMjU4Ljk2MS0yLjcyOS4wMDEtMy45NzItMi42NDUtMy45NzItNS4xMDR6bTI0LjE0Mi03LjQ3N3Y2LjkxNmMwIDIuMTE1LS41MzIgNS42NjYtNC4xMTUgNS42NjYtMi4wMy0uMTI0LTIuNzktMS40NDctMi43OS00Ljg3OHYtNy43MDRoLTMuMTY3djguODA3YzAgNC4yMSAxLjk1MSA2LjQzNiA1LjY0NSA2LjQzNiAxLjk0OSAwIDMuNTc1LS45NTEgNC41MTMtMi4zMjV2MS45ODdoMy4wODNWMTUuMDkxaC0zLjE2OXptMTguNTc4IDIuMjkxYy0uNzg5LTEuNjA2LTIuMjM3LTIuNjMxLTQuMDcyLTIuNjMxLTEuOTcyIDAtMy4zMzMuNzYtNC4zNyAyLjEzN3YtMS43OTdoLTIuOTk5djE0LjkwNGgzLjE2N3YtNy41MWMwLTIuNDUzLjkyNS01LjA3OCAzLjUyNC01LjA3OCAxLjkxIDAgMi4zMSAyLjA0IDIuMzEgMy43NXY4LjgzOGgzLjE2NXYtNy41MWMwLTIuNDUzLjkyNi01LjA3OCAzLjUyNS01LjA3OCAxLjkxIDAgMi4zMDkgMi4wNCAyLjMwOSAzLjc1djguODM4aDMuMTY4VjIwLjUxYzAtMy43NjgtMS44MTYtNS43NTktNS4yNTEtNS43NTktMS40ODgtLjAwMS0zLjQ0Ljg1Mi00LjQ3NiAyLjYzMXpNNDAuMjkyIDIzLjMzOGMtMS4xMDEtMy4wNDQtMy45MzItNS41OTEtNy42NjUtNy4xMjYuMDM3LS41MTguMTEzLTEuMDU5LjExMy0xLjU1MyAwLTUuMzc1LTIuMTE1LTkuMzYtNi4wMjgtMTEuMTYyLTUuNzM2LTIuNjM4LTEzLjc4Ni4wOTItMTkuNTgxIDYuNjQ4bDEuMDgzLjk1N2M1LjM3Ny02LjA4IDEyLjczMy04LjY2NyAxNy44OTMtNi4yOTUgMy4zNjkgMS41NTMgNS4xODggNS4wNzIgNS4xODggOS44NjMgMCAuMzQ2LS4wNi43MjktLjA3OCAxLjA4NC0uNjQxLS4yMDYtMS4yNDEtLjQ2OS0xLjkyMi0uNjE2LTcuODE1LTEuNjc2LTIxLjAxOS0uMjY3LTI1LjQ4MiA2LjczNS0xLjU3IDIuNDY0LTEuNzM2IDUuMDUxLS40NjcgNy4yODggMS43MDggMy4wMDQgNS42NTcgNC43ODQgMTAuMzA1IDQuNjQyIDcuODY2LS4xNTQgMTcuNjA3LTYuOTkzIDE4Ljg1OC0xNS45Mi4wMDctLjA2NC4wMDQtLjEyLjAxMi0uMTg2IDMuMTQ0IDEuMzg4IDUuNDkxIDMuNTc4IDYuNDE0IDYuMTMxLjI5Mi44MTIuNDM2IDEuNjQxLjQzNiAyLjQ3OSAwIDEuOTIyLS43NjQgMy44OS0yLjI2OCA1LjgwMS0zLjQ5NSA0LjQzNS05LjQyOCA2LjQ0LTE0LjAzNyA3LjM1MS0uMzIyLTIuMDk3LTIuMTE2LTMuNzA5LTQuMzA0LTMuNzA5YTQuMzc1IDQuMzc1IDAgMCAwIDAgOC43NSA0LjM3IDQuMzcgMCAwIDAgNC4yOTItMy41N2M0Ljg4NC0uOTM1IDExLjM1NS0zLjA2MyAxNS4xODQtNy45MjggMS45NTktMi40ODMgMi41ODQtNC43NyAyLjU4NC02LjY3MmE4Ljg4IDguODggMCAwIDAtLjUzLTIuOTkyem0tOS4yMTYtNS42NTJDMjkuOTQxIDI1Ljc4IDIwLjc1OCAzMi4yMjEgMTMuNjE0IDMyLjM2Yy00LjA1Ny4xMjQtNy41OTEtMS40MTEtOS4wMTItMy45MTItLjk5NS0xLjc0OC0uODQxLTMuODA3LjQyOS01Ljc5OCA0LjA1NS02LjM2MiAxNi43NDItNy42NDYgMjMuOTYxLTYuMDk4Ljc1Mi4xNjEgMS40MjIuNDM1IDIuMTE2LjY3My0uMDE3LjE2LS4wMTEuMy0uMDMyLjQ2MXoiLz48L3N2Zz4=);
                width: 100%;
    background-size: 90%;
    margin-bottom: -1rem;
        }
    </style>

    <script type="text/javascript">
    function checkit() {
        document.getElementById('rememberme').checked = true;
    }
    window.onload = checkit;
</script>
<?php }
add_action( 'login_enqueue_scripts', 'custom_login_logo' );
