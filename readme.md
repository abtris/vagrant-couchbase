# CouchBase cluster 

Install [vagrant](http://www.vagrantup.com/)

Download package for install: [http://packages.couchbase.com/releases/2.0.1/couchbase-server-enterprise_x86_2.0.1.deb](http://packages.couchbase.com/releases/2.0.1/couchbase-server-enterprise_x86_2.0.1.deb)

    wget http://packages.couchbase.com/releases/2.0.1/couchbase-server-enterprise_x86_2.0.1.deb

For ruby you need install library and gem:

Mac OS X: 
    
    brew install https://github.com/couchbase/homebrew/raw/stable/Library/Formula/libcouchbase.rb

and gem

    gem install couchbase

Documentation: [http://www.couchbase.com/develop/ruby/current](http://www.couchbase.com/develop/ruby/current)

Code examples: [https://github.com/couchbaselabs/DeveloperDay](https://github.com/couchbaselabs/DeveloperDay)

Make hello world:

```ruby
require 'rubygems'
require 'couchbase'

client = Couchbase.connect(:bucket => "beer-sample",
                           :hostname => "33.33.33.10")

beer = client.get("aass_brewery-juleol")
puts "#{beer['name']}, ABV: #{beer['abv']}"

beer['comment'] = "Random beer from Norway"
client.replace("aass_brewery-juleol", beer)

client.disconnect
```    

Puppet 
- [https://github.com/blom/puppet-couchbase](https://github.com/blom/puppet-couchbase)
Chef
- [https://github.com/getaroom/chef-couchbase](https://github.com/getaroom/chef-couchbase)
