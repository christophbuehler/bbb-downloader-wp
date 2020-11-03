import "./style.scss";

export default () => {
  window.onload = ready;
};

function ready() {
  // const meetingLink = 'https://bbb-scale.univie.ac.at/playback/presentation/2.0/playback.html?meetingId=ab96390226077858e4976a070069d6b1b73f7ff4-1604297356406';
  // const downloadLink = generateBbbDownloadLink(meetingLink);

  const genDiv = document.querySelector('.link-generator') as HTMLDivElement;
  const errDiv = document.querySelector('.error') as HTMLDivElement;
  const downloadBtn = document.querySelector('.btn') as HTMLLinkElement;
  const input = document.querySelector('input') as HTMLInputElement;

  input.addEventListener('change', updateLink);
  input.addEventListener('keyup', updateLink);

  let hasError = true;

  function updateLink() {
    const link = input.value;
    const err = getError(link);
    hasError = true;
    
    if (Boolean(err)) {
      showError(err);
      return;
    }

    try {
      const downloadLink = generateBbbDownloadLink(link);
      downloadBtn.href = downloadLink;
    } catch(e) {
      showError('The provided Big Blue Button Download link seems to be invalid. Please try a different link.');
      return;
    }
  
    hideError();
    hasError = false;
  }

  function getError(link: string): string {
    if (link.trim().length === 0) return 'The link is empty.';
    return void 0;
  }

  function hideError() {
    genDiv.classList.toggle('invalid', false);
    genDiv.classList.toggle('valid', true);

    errDiv.style.display = 'none';
  }
  
  function showError(err: string) {
    genDiv.classList.toggle('invalid', true);
    genDiv.classList.toggle('valid', false);
    errDiv.innerHTML = err;
    errDiv.style.display = 'block';
  }
}

function generateBbbDownloadLink(link: string) {
  const domain = link.split('/playback/')[0];
  const title = link.split('/playback/')[1].split('/')[0];
  const meetingId = link.split('meetingId=')[1];

  if (domain === '') {
    throw new Error('The link does not contain a domain.');
  }

  if (title === '') {
    throw new Error('The link does not contain a title.');
  }

  if (meetingId === '') {
    throw new Error('The link does not contain a meeting id.');
  }

  return `${domain}/${title}/${meetingId}/video/webcams.webm`;
}
