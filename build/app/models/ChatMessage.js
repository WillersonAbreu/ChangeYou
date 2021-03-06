"use strict"; function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }Object.defineProperty(exports, "__esModule", {value: true});var _sequelize = require('sequelize'); var _sequelize2 = _interopRequireDefault(_sequelize);

class ChatMessage extends _sequelize.Model {
  static init(sequelize) {
    super.init(
      {
        body_message: _sequelize2.default.STRING,
        conversation_id: _sequelize2.default.INTEGER,
        user_id: _sequelize2.default.INTEGER,
      },
      {
        sequelize,
      }
    );
    return this;
  }

  static associate(models) {
    this.belongsTo(models.ChatConversation, { foreignKey: 'id' });
    // this.belongsTo(models.User, { foreignKey: 'user_id' });
  }
}

exports. default = ChatMessage;
