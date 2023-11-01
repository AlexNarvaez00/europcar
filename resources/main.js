//This is you main entry file, Be creative =)
import "./index.css";
document.addEventListener("DOMContentLoaded", (event) => {
  const form = document.getElementById("formStation");
  const sessionId = form.dataset.session;

  const selectStationIn = document.getElementById("selectStationIn");

  selectStationIn.addEventListener("change", async (selectEvent) => {
    const value = selectEvent.target.value;
    const res = await fetch(`http://localhost:8080/europcar/${value}`, {
      method: "POST",
      body: JSON.stringify({
        sessionId,
      }),
    });
    const json = await res.json();
    let options = ``;
    for (const stationId in json.stationListOut) {
      const station = json.stationListOut[stationId];
      options += `<option value="${station.stationId}">${station.cityName} (${station.stationName})</option>`;
    }
    document.getElementById("selectStationOut").innerHTML = options;
  });
});
