#!/bin/bash

progreSh() {
  LR='\033[1;31m'
  LG='\033[1;32m'
  LY='\033[1;33m'
  LC='\033[1;36m'
  LW='\033[1;37m'
  NC='\033[0m'
  if [ "${1}" = "0" ]; then TME=$(date +"%s"); fi
  SEC=$(printf "%04d\n" $(($(date +"%s")-${TME}))); SEC="$SEC sec"
  PRC=$(printf "%.0f" "${1}")
  SHW=$(printf "%3d\n" ${PRC})
  LNE=$(printf "%.0f" $((${PRC}/2)))
  LRR=$(printf "%.0f" $((${PRC}/2-12))); if [ ${LRR} -le 0 ]; then LRR=0; fi;
  LYY=$(printf "%.0f" $((${PRC}/2-24))); if [ ${LYY} -le 0 ]; then LYY=0; fi;
  LCC=$(printf "%.0f" $((${PRC}/2-36))); if [ ${LCC} -le 0 ]; then LCC=0; fi;
  LGG=`printf "%.0f" $((${PRC}/2-48))`; if [ ${LGG} -le 0 ]; then LGG=0; fi;
  LRR_=""
  LYY_=""
  LCC_=""
  LGG_=""
  for ((i=1;i<=13;i++))
  do
    DOTS=""; for ((ii=${i};ii<13;ii++)); do DOTS="${DOTS}."; done
    if [ ${i} -le ${LNE} ]; then LRR_="${LRR_}#"; else LRR_="${LRR_}."; fi
    echo -ne "  ${LW}${SEC}  ${LR}${LRR_}${DOTS}${LY}............${LC}............${LG}............ ${SHW}%${NC}\r"
    # shellcheck disable=SC2086
    if [ ${LNE} -ge 1 ]; then sleep .05; fi
  done
  for ((i=14;i<=25;i++))
  do
    DOTS=""; for ((ii=${i};ii<25;ii++)); do DOTS="${DOTS}."; done
    if [ ${i} -le ${LNE} ]; then LYY_="${LYY_}#"; else LYY_="${LYY_}."; fi
    echo -ne "  ${LW}${SEC}  ${LR}${LRR_}${LY}${LYY_}${DOTS}${LC}............${LG}............ ${SHW}%${NC}\r"
    if [ ${LNE} -ge 14 ]; then sleep .05; fi
  done
  for ((i=26;i<=37;i++))
  do
    DOTS=""; for ((ii=${i};ii<37;ii++)); do DOTS="${DOTS}."; done
    if [ ${i} -le ${LNE} ]; then LCC_="${LCC_}#"; else LCC_="${LCC_}."; fi
    echo -ne "  ${LW}${SEC}  ${LR}${LRR_}${LY}${LYY_}${LC}${LCC_}${DOTS}${LG}............ ${SHW}%${NC}\r"
    if [ ${LNE} -ge 26 ]; then sleep .05; fi
  done
  for ((i=38;i<=49;i++))
  do
    DOTS=""; for ((ii=${i};ii<49;ii++)); do DOTS="${DOTS}."; done
    if [ ${i} -le ${LNE} ]; then LGG_="${LGG_}#"; else LGG_="${LGG_}."; fi
    echo -ne "  ${LW}${SEC}  ${LR}${LRR_}${LY}${LYY_}${LC}${LCC_}${LG}${LGG_}${DOTS} ${SHW}%${NC}\r"
    if [ ${LNE} -ge 38 ]; then sleep .05; fi
  done
}

###################
  container=$(docker ps |grep alpine-mariadb |awk '{print $1}')
  progreSh 0
  docker exec "$container" /usr/bin/mysqldump -u root --password=root sgen_db > backup.sql
  tar -czf backup.sql.tar.gz backup.sql
  a=1
	function verifica {
	local=$(pwd)
	if [ -e "$local"/Backup/backup$a.sql.tar.gz ]
	then
		#echo "ok"
		((a=$a+ 1))

		verifica    
	else
		    cp backup.sql.tar.gz "$local"/Backup/backup$a.sql.tar.gz
	fi

	if [ -e backup.sql.tar.gz ]
	then
	rm backup.sql.tar.gz backup.sql
	fi

	}
	progreSh 50

	verifica
  progreSh 100
  echo -e "\nArquivo de BackUp realizado com sucesso"
	echo "Diretorio onde est??: $local"/Backup/backup$a.sql.tar.gz