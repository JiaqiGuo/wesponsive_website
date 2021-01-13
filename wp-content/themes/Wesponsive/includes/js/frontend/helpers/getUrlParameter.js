var getUrlParameter;

getUrlParameter = function(sParam) {
  var i, sPageURL, sParameterName, sURLVariables;
  sPageURL = decodeURIComponent(window.location.search.substring(1));
  sURLVariables = sPageURL.split('&');
  sParameterName = void 0;
  i = void 0;
  i = 0;
  while (i < sURLVariables.length) {
    sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] === sParam) {
      if (sParameterName[1] === void 0) {
        return true;
      } else {
        return sParameterName[1];
      }
    }
    i++;
  }
};
