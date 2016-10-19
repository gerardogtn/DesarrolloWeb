var xmlHttp = createXmlHttpRequest();

function createXmlHttpRequest() {
  var xmlHttp;

  if(isInternetExplorer()) {
    xmlHttp = getActiveXXmlHttp();
  } else {
    xmlHttp = getSimplexmlHttpRequest();
  }

  if (!xmlHttp) {
    alert("Cannot create XmlHttpRequest");
  } else {
    return xmlHttp;
  }
}

function isInternetExplorer() {
  return window.ActiveXObject
}

function getActiveXXmlHttp() {
  try {
    return new ActiveXObject("Microsoft.XMLHTTP");
  } catch (e) {
    return false;
  }
}

function getSimplexmlHttpRequest() {
  try {
    return new XMLHttpRequest();
  } catch (e) {
    return false;
  }
}

// Estados de la variable XmlHttp.
// 0: No inicializada.
// 1: Leyendo.
// 2: Leido.
// 3: Interactiva
// 4: Completa
function process() {
  if (isXmlHttpReady()) {
    name = encodeURIComponent(document.getElementById("nombre").value);
    xmlHttp.open("GET", "hola.php?name=" + name, true);
    xmlHttp.onreadystatechange = handleServiceResponse;
    xmlHttp.send(null);
  } else {
    setTimeout('process()', 1000);
    // alert("XML is not ready");
  }
}

function handleServiceResponse() {
  if(isXmlHttpReady() && isXmlStatusSuccess()) {
    greeting = getGreeting();
    writeMessage(greeting);
    setTimeout('process()', 1000);
  }
}

function writeMessage(message) {
  console.log(message);
  document.getElementById('messageDiv').innerHTML = message;
}

function getGreeting() {
  return xmlHttp.responseXML.documentElement.firstChild.data;
}

function isXmlHttpReady() {
  return xmlHttp.readyState == 4 || xmlHttp.readyState == 0;
  // return xmlHttp.readyState == 4;
}

function isXmlStatusSuccess() {
  return xmlHttp.status == 200;
}
