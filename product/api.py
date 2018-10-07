#!/usr/bin/env python
#-*- coding:utf-8 -*-
###
# @Author   http://martinbortel.cz
# @Contact  me@martinbortel.cz
# @Created  01/03/2018
# @Updated	
# @Package  
# @Version  1.0-00.00
#
# @Uses
#
# @TODO
#
###

##
# Product service

# Imports
from flask import Flask
from flask_restful import Resource, Api

app = Flask(__name__)
api = Api(app)

class Product(Resource):
    def get(self):
        return {
            'products': ['Ice cream',
                        'Chocolate',
                        'Fruit',
                        'Computers']
        }

api.add_resource(Product, '/')

# boilerplate code to run the main function if it is not a import..
if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True)

# EOF
###
