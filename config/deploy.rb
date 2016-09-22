require 'mina/rsync'

set :user, 'root'
set :domain, ENV['DOMAIN'] || 'foobar.com'
set :deploy_to, '/home/awex'
set :branch, 'master'
set :rsync_options, %w[--recursive --delete --delete-excluded --exclude .git* --exclude deploy.rb]
set :rsync_copy, "rsync --archive"
set :rsync_stage, "tmp/#{ENV['DOMAIN']}-deploy"
set :forward_agent, true

desc 'Deploy to server'
task :deploy do
  deploy do
    invoke 'rsync:deploy'
    invoke :'deploy:cleanup'
    to :launch do
       queue %[ chown -R root:48 #{deploy_to} ]
       queue %[ chmod 644 $(find #{deploy_to} -type f) ]
       queue %[ chmod 710 $(find #{deploy_to} -type d) ]
    end
  end
end
