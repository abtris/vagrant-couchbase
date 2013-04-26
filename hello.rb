require 'rubygems'
require 'couchbase'

client = Couchbase.connect(:bucket => "gamesim-sample",
                           :hostname => "33.33.33.10")

player = client.get("Aaron0")
puts "#{player['experience']}, hitpoints: #{player['hitpoints']}"

player['comment'] = "Random beer from Norway"
client.replace("Aaron0", player)

client.disconnect