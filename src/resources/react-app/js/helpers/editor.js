import React from 'react';
import SunEditor from 'suneditor-react';
import 'suneditor/dist/css/suneditor.min.css';

class Editor extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            content: '',
        }
    }

    componentDidUpdate(prevProps) {
        if (prevProps !== this.props) {
            this.setState({
                content: this.props.content,
            })
        }
    }

    updateContent(value) {
        this.setState({content: value})
    }

    render() {
        if (this.state.content === null) {
            return null;
        }

        return <SunEditor
            value={this.state.content}
            onChange={this.props.updateContent}
        />
    }
}

export default Editor;
