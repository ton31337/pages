require 'mina/rsync'

set :user, 'root'
set :domain, ENV['DOMAIN'] || 'foobar.com'
set :deploy_to, '/home/awex'
set :branch, 'master'
set :repository, 'git@github.com:000webhost/pages.git'
set :rsync_options, %w[--recursive --delete --delete-excluded --exclude .git*]
set :rsync_stage, "tmp/#{ENV['DOMAIN']}-deploy"
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
  system "chown -R root:48 /home/awex"
  system "chmod -R 644 /home/awex"
  system "chmod 710 /home/awex"
end

task :precompile do
  Dir.chdir settings.rsync_stage do
    system '/usr/local/bin/composer install --no-dev'
  end
end

task 'rsync:stage' do
  invoke 'precompile'
end
