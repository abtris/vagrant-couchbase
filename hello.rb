require 'rubygems'
require 'couchbase'

client = Couchbase.connect(:bucket => "beer-sample",
                           :hostname => "33.33.33.10")

beer = client.get("aass_brewery-juleol")
puts "#{beer['name']}, ABV: #{beer['abv']}"

beer['comment'] = "Random beer from Norway"
client.replace("aass_brewery-juleol", beer)

client.disconnect