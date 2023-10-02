pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                echo "Build started and completed!"
            }
        }
        post{
            success{
                mail to: "gsirpali03@gmail.com",
                subject: "Build status email",
                body: "Build was successful!"
            }
        }
    }
}
