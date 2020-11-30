const url = require("url");
//const users = require("./userData.js");
const MongoClient = require("mongodb").MongoClient;
const ObjectId = require("mongodb").ObjectId;

const dburi = `mongodb+srv://${process.env.USERNAME}:${process.env.PASSWORD}@${process.env.CLUSTERURL}/?authMechanism=${process.env.AUTHMETH}`;

module.exports = {
	fetchOptions: async (req, res) => {
		res.statusCode = 200;
		res.setHeader("Access-Control-Allow-Origin", "*");
		res.setHeader("Access-Control-Allow-Methods", "GET,PATCH,DELETE,POST");
		res.setHeader("Access-Control-Allow-Headers", "X-Requested-With");
		res.setHeader("Access-Control-Allow-Headers", "Content-Type");
		res.setHeader("Content-Type", "text/html");
		res.end();
	},

	getMenuItems: async (req, res) => {
		//console.log(req.query);
		//console.log(req.param);
		const reqUrl = url.parse(req.url, true);
		const query = reqUrl.query;
		if ("_id" in query) {
			query["_id"] = new ObjectId(query["_id"]);
		}
		console.log(query);
		const client = new MongoClient(dburi, {
			useNewUrlParser: true,
			useUnifiedTopology: true,
		});
		await client.connect();
		console.log("Connected, getting menu items");
		var col = client.db("sweetb").collection("menuitems");
		var curs = await col.find(query).toArray();
		res.statusCode = 200;
		res.setHeader("Content-Type", "Application/json");
		res.setHeader("Access-Control-Allow-Origin", "*");
		res.setHeader("Access-Control-Allow-Headers", "X-Requested-With");
		res.setHeader("Access-Control-Allow-Headers", "Content-Type");
		res.write(JSON.stringify(curs));
		await client.close();
		await res.end();
	},

	getOrderItems: async (req, res) =>{
		// Initializing the request URL and the request URL query
		const reqUrl = url.parse(req.url, true);
		const query = reqUrl.query;
		if ("_id" in query) {
			query["_id"] = new ObjectId(query["_id"]);
		}
		console.log(query);
		const client = new MongoClient(dburi, {
			useNewUrlParser: true,
			useUnifiedTopology: true,
		});
		await client.connect();
		console.log("Connected, getting all order items");
		let dbo = client.db('sweetb');
	}
};
