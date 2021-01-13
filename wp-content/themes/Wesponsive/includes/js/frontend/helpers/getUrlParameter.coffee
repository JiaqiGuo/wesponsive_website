getUrlParameter = (sParam) ->
  sPageURL = decodeURIComponent(window.location.search.substring(1))
  sURLVariables = sPageURL.split('&')
  sParameterName = undefined
  i = undefined
  i = 0
  while i < sURLVariables.length
    sParameterName = sURLVariables[i].split('=')
    if sParameterName[0] == sParam
      return if sParameterName[1] == undefined then true else sParameterName[1]
    i++