require 'mina/rsync'

set :user, 'root'
set :domain, ENV['DOMAIN'] || 'foobar.com'
set :deploy_to, ENV['PATH'] || '/home/default'
set :branch, 'master'
set :rsync_options, %w[--recursive --delete --delete-excluded --exclude .git*]
set :rsync_stage, "."
set :forward_agent, true

desc 'Deploy to server'
task :deploy do
  to :before_hook do
    system "rm -rf #{settings.rsync_stage}"
  end
  deploy do
    invoke 'rsync:deploy'
    invoke :'deploy:cleanup'
    invoke :run_after
  end
end

task :run_after do
  system "chown -R root:48 $deploy_to"
  system "chmod -R 644 $deploy_to"
  system "chmod 710 $deploy_to"
end

