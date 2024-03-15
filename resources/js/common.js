const nl2br = (str) => {
  let res = str.replace(/\r\n/g, "<br>");//（Carriage Return + Line Feed）Windows形式の改行文字
  res = res.replace(/\n|\r/g, "<br>"); //(Line FeedまたはCarriage Return）UnixやMac形式の改行文字
  return res;
};

export { nl2br };

