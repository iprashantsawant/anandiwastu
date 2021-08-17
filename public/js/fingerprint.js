var returnPNGImage = true; // returns PNG image along with the template. Setting it to false, returns only template
var apiKey="w6TCtCYTw4ZEdXTCtsKWwrbDhndUZFV3w5ZHwrZFw6RGJGNnwpUWRzPCh8OEU0d2w5QWFcK2woTDtDRVFDUkwpMUwpdDwrRFw4R0wqXCpRXChsKGJ2TCh1NDwrbCtiTChcKGwpMXdsOmJCTDpMKGZjXCh1VDNsO0A1RmwrITMxfDtsOUZnfCg8KXF3XCpMKXwqZHw5bClsOmV8K0wpfCllbCg8KHdsO2RxYVw5bDhAM1NEXDtlYlVlPCp8OkEybClWQzw5bCtldWE8O0w6ZjRMKywqXCpFUzB8KFZsOWNCTClUXCsmTClXXClQdWwoMUQ3NjRRYFFMKnNwfClcKGNXYzwpQVwrR3F8KUwqdVNsKlwofCk8KUMzXDshdFwoQzFMKTZDfClkZzwpdFJ0UmwrZmw7QkVxVGRxVjZxYlwodWdcKUNMOEwrLClMKFwrLDhGQjw7bCpmdXRsK2w5QkwrZnwqTCg8KVZsKmE8KkRsOUw6RGMxNFw7IVRcKVQwXDhgPCl8KTwoNmZ8KVZ1bCp8KDwoMmdhYnVmUFw6YmRcKUdcKFQ2QjwqUkw5bCgyPDtsKGwoQlw5bCtldXwpTDtMKyJEfDlsKyNER0dGPCsncVwofDtsKFE8Oyw5bCpmN3w7JVNAcmd3dXR1TDpjMnw4TDtkXChhRkwrLDlEbClsKEV8KWUzM0w7LChiQHw4R0c8KWdlNXwqbCtjbCpsOyFDPClXQzA3bChXZTwocjw6bCgyd2w4YWw6RGwqd1VcKGZsKWR8OWJDXDlGfClsKywqQmwodnwqUVRmcmNXYzw7JHMxckw5YkwoVkVhdjRMKnB2VnwoYnd8KTZ1dkwoRXMxUFVRTDtMKTRsK2w4YDw5QWwqdlwqbClMKTNRXChEfDsmbDtFYDw5PDpMKUE3bDpHZmw7IWw7ZmwpZmwqdFR8KTY1U0w6R3w5PDk1MEQUFZVQ==";

capture(apiKey, returnPNGImage);

// compare(apiKey,temlate1,temlate2);

function onCaptureSuccess(data)
{
	var plainData = data;
	//write the program to decrypt if security key is set in API monitor for the scanner

	var scannerData = getScannerSuccessData(plainData);

	var template = scannerData.template;
	var pngImageContent = "data:image/png;base64," + scannerData.image;

}

function onCaptureFailure(data)
{
	var failureData = getScannerFailureData(data);
	var erroString = failureData.errorString;
}

function onCompareSuccess(data)
{
	var plainData = data;
	//write the program to decrypt if security key is set in API monitor for the scanner

	var scannerData = getScannerSuccessData(plainData);
	var matchingScore = scannerData.matchScore;
}

function onCompareFailure(data)
{
	var failureData = getScannerFailureData(data);
	var erroString = failureData.errorString;
}