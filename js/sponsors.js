(function ($) {
	

    var Sponsor = Backbone.Model.extend({
        defaults: {
            link: "http://www.google.com",
            photo: "http://placekitten.com/g/500/500"
        }
    });

    var Sponsors = Backbone.Collection.extend({
        model:  Sponsor,
        url: '../json/sponsors.json',
        // initialize: function () {
            
        //     this.fetch();
        // }
    });

    var SponsorView = Backbone.View.extend({
        tagName: "li",
        template: $("#sponsorTemplate").html(),
        render: function() {
            var tmpl = _.template(this.template);

            this.$el.html(tmpl(this.model.toJSON()));
            return this;
        }
    });

    var SponsorsView = Backbone.View.extend({
        el: $(".sponsors"),

        initialize: function() {
            // var personCollection = new PersonCollection(people);
            this.collection = new Sponsors();
            this.collection.on("sync", this.render, this);

            this.collection.fetch();
        },

        render: function() {
            var that = this;
            _.each(this.collection.models, function(item) {
                that.renderSponsor(item)
            }, this);
        },

        renderSponsor: function(item) {
            var sponsorView = new SponsorView({
                model: item
            });
            this.$el.append(sponsorView.render().el);
        }
    });
    var sponsor = new SponsorsView();
} (jQuery));