# Text colors
ERROR='\033[0;31m'    # Red
SUCCESS='\033[0;32m'  # Green
INFO='\033[0;36m'     # Cyan
NC='\033[0m'          # No Color

# Log informational mesages
# @param    {string} $1 - text to print out
# @returns  {string}    - info-colored text
log () {
  echo -e "${INFO}$1${NC}"
}

# Log successful mesages
# @param    {string} $1 - text to print out
# @returns  {string}    - success-colored text
log-success () {
  echo -e "${SUCCESS}$1${NC}"
}

# Log error mesages
# @param    {string} $1 - text to print out
# @returns  {string}    - error-colored text
log-error () {
  echo -e "${ERROR}$1${NC}"
}
