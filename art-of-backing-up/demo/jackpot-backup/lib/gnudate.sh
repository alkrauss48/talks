# Calls the right date command on a string. Will use gdate (GNU Date) if it exists,
# otherwise will use the normal date command.
#
# @param    {any}    $@ - Options that the date command accepts
# @returns  {string}    - The formatted date value
gnudate() {
  if hash gdate 2>/dev/null; then
    gdate "$@"
  else
    date "$@"
  fi
}
