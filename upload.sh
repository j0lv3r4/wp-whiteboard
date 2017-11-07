rsync \
    -hvrPtzu \
    --exclude-from "./rsync-ignore.txt" \
    -e "ssh -p 22700" \
    . \
    adwhitetesting9@adwhitetesting9.info:httpdocs/wp-content/themes/thebookthewoodlands