require 'mina/rsync'

set :user, 'root'
set :domain, ENV['DOMAIN'] || 'foobar.com'
set :deploy_to, ENV['DEPLOY_PATH'] || '/home/default'
set :branch, 'master'
set :rsync_options, %w[--recursive --delete --delete-excluded --exclude .git*]
set :rsync_copy, "rsync --archive"
set :rsync_stage, "deploy"
set :forward_agent, true

desc 'Deploy to server'
task :deploy do
  deploy do
    invoke 'rsync:deploy'
    invoke :'deploy:cleanup'
    to :launch do
       queue %[ chown -R root:48 #{deploy_to} ]
       queue %[ chmod -R 644 #{deploy_to} ]
       queue %[ chmod 710 #{deploy_to} ]
    end
  end
end
