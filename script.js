//navbar

        function abrirMenu() {
            document.getElementById("sidebar").style.width = "250px";
        }

        function fecharMenu() {
            document.getElementById("sidebar").style.width = "0";
        }

        // Fecha o menu se clicar fora
        window.onclick = function(event) {
            const sidebar = document.getElementById("sidebar");
            if (event.target != sidebar && !sidebar.contains(event.target) && event.target.className != 'menu-btn') {
                sidebar.style.width = "0";
            }
        }

//