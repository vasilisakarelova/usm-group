const getCookie = cname => {
  if (typeof document !== 'undefined') {
    const name = cname + '=';
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1);
      if (c.includes(name)) return c.substring(name.length, c.length);
    }
  }

  return '';
};

export default getCookie;
