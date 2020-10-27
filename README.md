># JPREP 講師管理システム (Staff Management System)

# Git

### git:develop_haproxy
    ```
    ssh://git-codecommit.ap-northeast-1.amazonaws.com/v1/repos/develop_haproxy
    ```
### git:develop_staff_management
    ```
    ssh://git-codecommit.ap-northeast-1.amazonaws.com/v1/repos/develop_staff_management
    ```
### git:studentsdb_v2
    ```
    ssh://git-codecommit.ap-northeast-1.amazonaws.com/v1/repos/studentsdb_v2
    Please check out to branch `release`
    ```

# Installation
* Build project containers by run the commands below
    ```
    cd studentsdb_v2
    docker-compose -f docker-compose.yml build
    docker-compose -f docker-compose.yml up -d
    ```
    ```
    cd develop_staff_management
    ./staff_build.sh
    ```
* Add test domain to `hosts` file
    ```
    <Virtual-Marchine-IP-or-Local-IP> staff.local
    ```
# Connect to BMS DB
* Host: `v2_db`
* Port: `5432`
* DBName: `primarydb_dev_db`
* User: `primarydb_dev`
* Pass: `primarydb_dev`

# Compile assets
    ```
    ./staff_npm.sh npm run dev
    ```

# Utilities
`./staff_build.sh` : Automatic run docker-compose and build containers.

`./staff_start.sh` : Start containers.

`./staff_stop.sh` : Stop containers.

`./staff_cmd.sh <command>` : Run `command` at `/var/www/html` inside `staffweb` container.

`./staff_npm.sh <command>` : Run `npm command`
