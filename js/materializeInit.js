// slider initiaisation
document.addEventListener('DOMContentLoaded', function() {
    
    var sliderElems = document.querySelectorAll('.slider');
    var sliderInstances = M.Slider.init(sliderElems, {'height' : 700, 'indicators' : false, 'duration' : 50});

    var modalElems = document.querySelectorAll('.modal');
    var modalInstances = M.Modal.init(modalElems, {'inDuration' : 200, 'outDuration' : 200, 'preventScrolling' : true});

    var sideNavElems = document.querySelectorAll('.sidenav');
    var sideNavInstances = M.Sidenav.init(sideNavElems);
  });