#/bin/bash

curl -X POST "https://api.cloudflare.com/client/v4/zones/$1/purge_cache" \
          -H "Authorization: Bearer $2" \
          -H "Content-Type: application/json" \
          --data '{"purge_everything":true}'

