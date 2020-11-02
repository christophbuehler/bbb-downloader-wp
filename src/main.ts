import "./style.scss";

export default () => {
  window.onload = ready;
};

function ready() {
  const meetingLink = 'https://bbb-scale.univie.ac.at/playback/presentation/2.0/playback.html?meetingId=ab96390226077858e4976a070069d6b1b73f7ff4-1604297356406';
  const downloadLink = generateBbbDownloadLink(meetingLink);
}

function generateBbbDownloadLink(link: string) {
  const domain = link.split('/playback/')[0];
  const title = link.split('/playback/')[1].split('/')[0];
  const meetingId = link.split('meetingId=')[1];
  return `${domain}/${title}/${meetingId}/video/webcams.webm`;
}
