window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        //small navbar
        var counter = 0;
        document.getElementById("navbarID-facility").style.backgroundColor = "#c70a0c";
        document.getElementById("navbarID-facility").style.fontSize = "20px";
        document.getElementById("navbarID-facility").style.padding = "2px 5%";
        document.getElementById("logoID-facility").style.height = "80px";
        document.getElementById("logoID-facility").src = "/images/logoSanitalWhite.png";
        document.getElementById("home-facility").style.color = "white";
        document.getElementById("home-facility").style.marginTop = "20px";
        document.getElementById("uberuns-facility").style.color = "white";
        document.getElementById("referenzen-facility").style.color = "white";
        document.getElementById("jobs-facility").style.color = "white";
        document.getElementById("navbar-buttonID-facility").style.background = "white";
        document.getElementById("navbar-buttonID-facility").style.color = "#c70a0c";

        if (counter == 0) {
            //Home animation small
            document.getElementById("home-facility").onmouseover = function() {
                mouseOverSmallHomeFacility()
            };
            document.getElementById("home-facility").onmouseout = function() {
                mouseOutSmallHomeFacility()
            };

            function mouseOverSmallHomeFacility() {
                document.getElementById("home-facility").style.color = "#800000";

            }

            function mouseOutSmallHomeFacility() {
                document.getElementById("home-facility").style.color = "white";
            }
            //Equipment animation small
            document.getElementById("uberuns-facility").onmouseover = function() {
                mouseOverSmallEquipmentFacility()
            };
            document.getElementById("uberuns-facility").onmouseout = function() {
                mouseOutSmallEquipmentFacility()
            };

            function mouseOverSmallEquipmentFacility() {
                document.getElementById("uberuns-facility").style.color = "#800000";
            }

            function mouseOutSmallEquipmentFacility() {
                document.getElementById("uberuns-facility").style.color = "white";
            }

            //About animation small
            document.getElementById("referenzen-facility").onmouseover = function() {
                mouseOverSmallAboutReferenzen()
            };
            document.getElementById("referenzen-facility").onmouseout = function() {
                mouseOutSmallAboutReferenzen()
            };

            function mouseOverSmallAboutReferenzen() {
                document.getElementById("referenzen-facility").style.color = "#800000";
            }

            function mouseOutSmallAboutReferenzen() {
                document.getElementById("referenzen-facility").style.color = "white";
            }

            //Jobs
            document.getElementById("jobs-facility").onmouseover = function() {
                mouseOverSmallJobsFacility()
            };
            document.getElementById("jobs-facility").onmouseout = function() {
                mouseOutSmallJobsFacility()
            };

            function mouseOverSmallJobsFacility() {
                document.getElementById("jobs-facility").style.color = "#800000";
            }

            function mouseOutSmallJobsFacility() {
                document.getElementById("jobs-facility").style.color = "white";
            }

            //Contact-button animation small
            document.getElementById("navbar-buttonID-facility").onmouseover = function() {
                mouseOverSmallContactBtnFacility()
            };
            document.getElementById("navbar-buttonID-facility").onmouseout = function() {
                mouseOutSmallContactBtnFacility()
            };

            function mouseOverSmallContactBtnFacility() {
                document.getElementById("navbar-buttonID-facility").style.color = "white";
                document.getElementById("navbar-buttonID-facility").style.background = "linear-gradient(to right, white 50%, #800000 50%)";
                document.getElementById("navbar-buttonID-facility").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID-facility").style.backgroundPosition = "right bottom";
            }

            function mouseOutSmallContactBtnFacility() {
                document.getElementById("navbar-buttonID-facility").style.color = "#223d6b";
                document.getElementById("navbar-buttonID-facility").style.background = "linear-gradient(to left, #800000 50%, white 50%)";
                document.getElementById("navbar-buttonID-facility").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID-facility").style.backgroundPosition = "left bottom";

            }
        }

    } else {
        counter = 1;
        document.getElementById("navbarID-facility").style.backgroundColor = "rgba(255, 255, 255)";
        document.getElementById("navbarID-facility").style.fontSize = "20px";
        document.getElementById("navbarID-facility").style.padding = "2px 5%";
        document.getElementById("logoID-facility").style.height = "120px";
        document.getElementById("logoID-facility").src = "/images/logoSanitalRed.png";
        document.getElementById("home-facility").style.color = "#c70a0c";
        document.getElementById("uberuns-facility").style.color = "#c70a0c";
        document.getElementById("referenzen-facility").style.color = "#c70a0c";
        document.getElementById("jobs-facility").style.color = "#c70a0c";
        document.getElementById("navbar-buttonID-facility").style.color = "white";
        document.getElementById("navbar-buttonID-facility").style.background = "#c70a0c";
        if (counter == 1) {
            //Home animation big
            document.getElementById("home-facility").onmouseover = function() {
                mouseOverBigHomeFacility()
            };
            document.getElementById("home-facility").onmouseout = function() {
                mouseOutBigHomeFacility()
            };

            function mouseOverBigHomeFacility() {
                document.getElementById("home-facility").style.color = "black";
            }

            function mouseOutBigHomeFacility() {
                document.getElementById("home-facility").style.color = "#c70a0c";
            }

            //Equipment animation big
            document.getElementById("uberuns-facility").onmouseover = function() {
                mouseOverBigEquipmentFacility()
            };
            document.getElementById("uberuns-facility").onmouseout = function() {
                mouseOutBigEquipmentFacility()
            };

            function mouseOverBigEquipmentFacility() {
                document.getElementById("uberuns-facility").style.color = "black";
            }

            function mouseOutBigEquipmentFacility() {
                document.getElementById("uberuns-facility").style.color = "#c70a0c";
            }

            //About animation big
            document.getElementById("referenzen-facility").onmouseover = function() {
                mouseOverBigAboutFacility()
            };
            document.getElementById("referenzen-facility").onmouseout = function() {
                mouseOutBigAboutFacility()
            };

            function mouseOverBigAboutFacility() {
                document.getElementById("referenzen-facility").style.color = "black";
            }

            function mouseOutBigAboutFacility() {
                document.getElementById("referenzen-facility").style.color = "#c70a0c";
            }

            //Jobs

            document.getElementById("jobs-facility").onmouseover = function() {
                mouseOverBigJobsFacility()
            };
            document.getElementById("jobs-facility").onmouseout = function() {
                mouseOutBigJobsFacility()
            };

            function mouseOverBigJobsFacility() {
                document.getElementById("jobs-facility").style.color = "black";
            }

            function mouseOutBigJobsFacility() {
                document.getElementById("jobs-facility").style.color = "#c70a0c";
            }

            //Contact Button animation big
            document.getElementById("navbar-buttonID-facility").onmouseover = function() {
                mouseOverBigContactBtnFacility()
            };
            document.getElementById("navbar-buttonID-facility").onmouseout = function() {
                mouseOutBigContactBtnFacility()
            };

            function mouseOverBigContactBtnFacility() {
                document.getElementById("navbar-buttonID-facility").style.color = "white";
                document.getElementById("navbar-buttonID-facility").style.background = "linear-gradient(to right, #c70a0c 50%, #800000 50%)";
                document.getElementById("navbar-buttonID-facility").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID-facility").style.backgroundPosition = "right bottom";
            }

            function mouseOutBigContactBtnFacility() {
                document.getElementById("navbar-buttonID-facility").style.color = "white";
                document.getElementById("navbar-buttonID-facility").style.background = "linear-gradient(to left, #c70a0c 50%, #223d6b 50%)";
                document.getElementById("navbar-buttonID-facility").style.backgroundSize = "200% 100%";
                document.getElementById("navbar-buttonID-facility").style.backgroundPosition = "left bottom";
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