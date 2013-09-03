Shell (binary safe):
  curl -n -F "file=@/home/user/foo" <?php echo site_url("file/do_upload")."\n"; ?>
  cat file | curl -n -F "file=@-;filename=stdin" <?php echo site_url("file/do_upload")."\n"; ?>

Client:
Development (git): http://git.server-speed.net/users/flo/fb
Latest release: <?php echo $client_link."\n"; ?>
GPG sigs, older versions: <?php echo $client_link_dir."\n"; ?>

To authenticate add the following to your ~/.netrc:
  machine paste.xinu.at login my_username password my_secret_password

