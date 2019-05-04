#!/usr/bin/env groovy
node('master') {
    try {
        stage('build') {
            checkout scm

            sh "composer install"
            // sh "cp .env.example .env"
            // sh "php artisan key:generate"
            sh 'sudo docker-compose up -d'
        }

        // stage('test') {
        //     sh "./vendor/bin/phpunit"
        // }

        stage('deploy') {
            // ansible-playbook -i ./ansible/hosts ./ansible/deploy.yml
            sh "echo 'WE ARE DEPLOYING'"
            
        }
    } catch(error) {
        throw error
        sh 'sudo docker-compose down'
    } finally {

    }

}

// node {
//     stage("composer_install") {
//         sh 'composer install'
//     }

//     stage("php_lint") {
//         sh 'find . -name "*.php" -print0 | xargs -0 -n1 php -l'
//     }

//     stage("phpunit") {
//         sh 'vendor/bin/phpunit'
//     }

//     stage("codeception") {
//         sh 'vendor/bin/codecept run'
//     }
//     stage("docker-compose"){
//         sh 'ls'
//         sh 'docker-compose up'
//     }
// }
