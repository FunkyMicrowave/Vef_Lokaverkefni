for (var line=1; line<260; line++) {
  for(var i=1;i<229;i++) {
    var s = (Math.floor((Math.random()*2)%2)) ? '\u2571': '\u2572';
    document.write(s);
  }
  document.writeln("<br>");
}