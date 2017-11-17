# Jackpot error handler. Prints out the stack trace and exits the program.
# @param    {string} $? - Error code
# @returns  {void}
onerror() {
  log-error "There was an error in your script with code: $?"

  # Print out stack trace
  while caller $((n++)); do :; done;

  exit
}
