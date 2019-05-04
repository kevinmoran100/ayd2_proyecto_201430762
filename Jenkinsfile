#!/usr/bin/env groovy
node('master') {
    try {
        stage('build') {
            checkout scm

            sh "composer install"
            // sh "cp .env.example .env"
            // sh "php artisan key:generate"
        }

        // stage('test') {
        //     sh "./vendor/bin/phpunit"
        // }

        stage('deploy') {
            // ansible-playbook -i ./ansible/hosts ./ansible/deploy.yml
            sh "echo 'WE ARE DEPLOYING'"
            sh 'docker-compose up'
        }
    } catch(error) {
        throw error
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
