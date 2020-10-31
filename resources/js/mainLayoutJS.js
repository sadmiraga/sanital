window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        //small navbar
        var counter = 0;
        document.getElementById("navbarID").style.backgroundColor = "#2F5596";
        document.getElementById("navbarID").style.fontSize = "20px";
        document.getElementById("navbarID").style.padding = "2px 5%";
        document.getElementById("logoID").style.height = "80px";
        document.getElementById("logoID").src = "/images/logoWhite.png";
        document.getElementById("home").style.color = "white";
        document.getElementById("home").style.marginTop = "20px";
        document.getElementById("equipment").style.color = "white";
        document.getElementById("about").style.color = "white";
        document.getElementById("navbar-buttonID").style.backgroundColor = "white";
        document.getElementById("navbar-buttonID").style.color = "#0088a9";

        if (counter == 0) {
            //Home animation small
            document.getElementById("home").onmouseover = function() {
                mouseOverSmallHome()
            };
            document.getElementById("home").onmouseout = function() {
                mouseOutSmallHome()
            };

            function mouseOverSmallHome() {
                document.getElementById("home").style.color = "#105561";

            }

            function mouseOutSmallHome() {
                document.getElementById("home").style.color = "white";
            }
            //Equipment animation small
            document.getElementById("equipment").onmouseover = function() {
                mouseOverSmallEquipment()
            };
            document.getElementById("equipment").onmouseout = function() {
                mouseOutSmallEquipment()
            };

            function mouseOverSmallEquipment() {
                document.getElementById("equipment").style.color = "#105561";
            }

            function mouseOutSmallEquipment() {
                document.getElementById("equipment").style.color = "white";
            }

            //About animation small
            document.getElementById("about").onmouseover = function() {
                mouseOverSmallAbout()
            };
            document.getElementById("about").onmouseout = function() {
                mouseOutSmallAbout()
            };

            function mouseOverSmallAbout() {
                document.getElementById("about").style.color = "#105561";
            }

            function mouseOutSmallAbout() {
                document.getElementById("about").style.color = "white";
            }

            //Contact-button animation small
            document.getElementById("navbar-buttonID").onmouseover = function() {
                mouseOverSmallContactBtn()
            };
            document.getElementById("navbar-buttonID").onmouseout = function() {
                mouseOutSmallContactBtn()
            };

            function mouseOverSmallContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "white";
                document.getElementById("navbar-buttonID").style.backgroundColor = "#0088a9";
            }

            function mouseOutSmallContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "#0088a9";
                document.getElementById("navbar-buttonID").style.backgroundColor = "white";
            }
        }

    } else {
        counter = 1;
        document.getElementById("navbarID").style.backgroundColor = "rgba(255, 255, 255)";
        document.getElementById("navbarID").style.fontSize = "20px";
        document.getElementById("navbarID").style.padding = "2px 5%";
        document.getElementById("logoID").style.height = "120px";
        document.getElementById("logoID").src = "/images/logoBlack.png";
        document.getElementById("home").style.color = "#0088a9";
        document.getElementById("equipment").style.color = "#0088a9";
        document.getElementById("about").style.color = "#0088a9";
        document.getElementById("navbar-buttonID").style.color = "white";
        document.getElementById("navbar-buttonID").style.backgroundColor = "#0088a9";
        if (counter == 1) {
            //Home animation big
            document.getElementById("home").onmouseover = function() {
                mouseOverBigHome()
            };
            document.getElementById("home").onmouseout = function() {
                mouseOutBigHome()
            };

            function mouseOverBigHome() {
                document.getElementById("home").style.color = "black";
            }

            function mouseOutBigHome() {
                document.getElementById("home").style.color = "#0088a9";
            }

            //Equipment animation big
            document.getElementById("equipment").onmouseover = function() {
                mouseOverBigEquipment()
            };
            document.getElementById("equipment").onmouseout = function() {
                mouseOutBigEquipment()
            };

            function mouseOverBigEquipment() {
                document.getElementById("equipment").style.color = "black";
            }

            function mouseOutBigEquipment() {
                document.getElementById("equipment").style.color = "#0088a9";
            }

            //About animation big
            document.getElementById("about").onmouseover = function() {
                mouseOverBigAbout()
            };
            document.getElementById("about").onmouseout = function() {
                mouseOutBigAbout()
            };

            function mouseOverBigAbout() {
                document.getElementById("about").style.color = "black";
            }

            function mouseOutBigAbout() {
                document.getElementById("about").style.color = "#0088a9";
            }

            //Contact Button animation big
            document.getElementById("navbar-buttonID").onmouseover = function() {
                mouseOverBigContactBtn()
            };
            document.getElementById("navbar-buttonID").onmouseout = function() {
                mouseOutBigContactBtn()
            };

            function mouseOverBigContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "white";
                document.getElementById("navbar-buttonID").style.backgroundColor = "#105561";
            }

            function mouseOutBigContactBtn() {
                document.getElementById("navbar-buttonID").style.color = "white";
                document.getElementById("navbar-buttonID").style.backgroundColor = "#0088a9";
            }
        }
    }
}

function openNav() {
    document.getElementById("mySidepanel").style.width = "50%";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}