/*
 * Swagger Petstore
 * This spec is mainly for testing Petstore server and contains fake endpoints, models. Please do not use this for any other purpose. Special characters: \" \\
 *
 * OpenAPI spec version: 1.0.0
 * Contact: apiteam@swagger.io
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 *
 * Swagger Codegen version: 2.4.6-SNAPSHOT
 *
 * Do not edit the class manually.
 *
 */

(function(root, factory) {
  var testDataFile = process.env.TEST_DATA_FILE
    ? process.env.TEST_DATA_FILE
    : 'C:\\source\\GitHub\\demonfiddler\\swagger-codegen\\samples\\client\\petstore\\javascript-override-default-config\\test\\test-data.json';
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', 'json-pointer', '../../assert-equals', '../../../js/petstore/index', testDataFile], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('json-pointer'), require('../../assert-equals'), require('../../../js/petstore/index'), require(testDataFile));
  } else {
    // Browser globals (root is window)
    // TODO: load browser test data from file. Maybe via FileSystem (Mozilla, chrome.fileSystem)?
    var testData = null;
    factory(root.expect, root.JsonPointer, root.assertEquals, root.SwaggerPetstore, testData);
  }
}(this, function(expect, pointer, assertEquals, SwaggerPetstore, testData) {
  'use strict';

  var instance;
  var testDataCache;

  function getTestData(pointer) {
    return testDataCache.get('/petstore/FakeApi' + pointer);
  }

  before(function() {
    testDataCache = pointer(testData);
  });


  beforeEach(function() {
    instance = new SwaggerPetstore.FakeApi();
  });

  describe('petstore', function() {
    describe('FakeApi', function() {
      describe('fakeOuterBooleanSerialize', function() {
        it('should call fakeOuterBooleanSerialize successfully', function(done) {
          var opts = {};
          opts.body = getTestData('/fakeOuterBooleanSerialize/body');

          instance.fakeOuterBooleanSerialize(opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            let expected = getTestData('/fakeOuterBooleanSerialize/response');
            assertEquals(expected, data);

            done();
          });
        });
      });
      describe('fakeOuterCompositeSerialize', function() {
        it('should call fakeOuterCompositeSerialize successfully', function(done) {
          var opts = {};
          opts.body = getTestData('/fakeOuterCompositeSerialize/body');

          instance.fakeOuterCompositeSerialize(opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            let expected = getTestData('/fakeOuterCompositeSerialize/response');
            assertEquals(expected, data);

            done();
          });
        });
      });
      describe('fakeOuterNumberSerialize', function() {
        it('should call fakeOuterNumberSerialize successfully', function(done) {
          var opts = {};
          opts.body = getTestData('/fakeOuterNumberSerialize/body');

          instance.fakeOuterNumberSerialize(opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            let expected = getTestData('/fakeOuterNumberSerialize/response');
            assertEquals(expected, data);

            done();
          });
        });
      });
      describe('fakeOuterStringSerialize', function() {
        it('should call fakeOuterStringSerialize successfully', function(done) {
          var opts = {};
          opts.body = getTestData('/fakeOuterStringSerialize/body');

          instance.fakeOuterStringSerialize(opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            let expected = getTestData('/fakeOuterStringSerialize/response');
            assertEquals(expected, data);

            done();
          });
        });
      });
      describe('testBodyWithQueryParams', function() {
        it('should call testBodyWithQueryParams successfully', function(done) {
          var body = getTestData('/testBodyWithQueryParams/body');
          var query = getTestData('/testBodyWithQueryParams/query');

          instance.testBodyWithQueryParams(body, query, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }

            done();
          });
        });
      });
      describe('testClientModel', function() {
        it('should call testClientModel successfully', function(done) {
          var body = getTestData('/testClientModel/body');

          instance.testClientModel(body, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }
            let expected = getTestData('/testClientModel/response');
            assertEquals(expected, data);

            done();
          });
        });
      });
      describe('testEndpointParameters', function() {
        it('should call testEndpointParameters successfully', function(done) {
          var _number = getTestData('/testEndpointParameters/_number');
          var _double = getTestData('/testEndpointParameters/_double');
          var patternWithoutDelimiter = getTestData('/testEndpointParameters/patternWithoutDelimiter');
          var _byte = getTestData('/testEndpointParameters/_byte');
          var opts = {};
          opts.integer = getTestData('/testEndpointParameters/integer');
          opts.int32 = getTestData('/testEndpointParameters/int32');
          opts.int64 = getTestData('/testEndpointParameters/int64');
          opts._float = getTestData('/testEndpointParameters/_float');
          opts._string = getTestData('/testEndpointParameters/_string');
          opts.binary = getTestData('/testEndpointParameters/binary');
          opts._date = getTestData('/testEndpointParameters/_date');
          opts.dateTime = getTestData('/testEndpointParameters/dateTime');
          opts.password = getTestData('/testEndpointParameters/password');
          opts.callback = getTestData('/testEndpointParameters/callback');

          instance.testEndpointParameters(_number, _double, patternWithoutDelimiter, _byte, opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }

            done();
          });
        });
      });
      describe('testEnumParameters', function() {
        it('should call testEnumParameters successfully', function(done) {
          var opts = {};
          opts.enumFormStringArray = getTestData('/testEnumParameters/enumFormStringArray');
          opts.enumFormString = getTestData('/testEnumParameters/enumFormString');
          opts.enumHeaderStringArray = getTestData('/testEnumParameters/enumHeaderStringArray');
          opts.enumHeaderString = getTestData('/testEnumParameters/enumHeaderString');
          opts.enumQueryStringArray = getTestData('/testEnumParameters/enumQueryStringArray');
          opts.enumQueryString = getTestData('/testEnumParameters/enumQueryString');
          opts.enumQueryInteger = getTestData('/testEnumParameters/enumQueryInteger');
          opts.enumQueryDouble = getTestData('/testEnumParameters/enumQueryDouble');

          instance.testEnumParameters(opts, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }

            done();
          });
        });
      });
      describe('testInlineAdditionalProperties', function() {
        it('should call testInlineAdditionalProperties successfully', function(done) {
          var param = getTestData('/testInlineAdditionalProperties/param');

          instance.testInlineAdditionalProperties(param, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }

            done();
          });
        });
      });
      describe('testJsonFormData', function() {
        it('should call testJsonFormData successfully', function(done) {
          var param = getTestData('/testJsonFormData/param');
          var param2 = getTestData('/testJsonFormData/param2');

          instance.testJsonFormData(param, param2, function(error, data, response) {
            if (error) {
              done(error);
              return;
            }

            done();
          });
        });
      });
    });
  });

}));